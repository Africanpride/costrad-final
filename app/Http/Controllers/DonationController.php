<?php

namespace App\Http\Controllers;

use App\Models\Donations;
use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Unicodeveloper\Paystack\Facades\Paystack;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Gate::denies('isAdmin')) {
            return view('donate'); // Return a 403 Forbidden error if the user is not authorized
        }

        $donations = Donations::paginate(10);
        return view('admin.donations.index', compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, FlasherInterface $flasher)
    {
        $rules = [
            'amount' => 'required|numeric',
        ];

        // Apply additional rules if $anonymousDonation is false
        if (!$request->has('anonymousDonation')) {
            $rules['name'] = 'required';
            $rules['email'] = 'required|email';
        }

        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            // Handle validation failure
            app('flasher')->addError('Missing Values Error', 'Error');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $donationID = Donations::generateOrderId();
        $user_id = Donations::getDonor();
        // Get the exchange rate and other inputs for api
        $exchange_rate = ExchangeRate::getExchangeRate();
        $email = Donations::getEmail($request->email);
        $ghs_amount = $request->amount * (($exchange_rate + 0.50) * 100);
        $reference = Paystack::genTranxRef();

        try {
            $data = array(
                "amount" => round($ghs_amount),
                "reference" =>  $reference,
                "email" => $email,
                "currency" => "GHS",
                "orderID" => $donationID,
                "channels" => ['card', 'bank', 'ussd', 'qr', 'mobile_money', 'bank_transfer'],
                "metadata" => [
                    "donation" => true,
                    "orderID" => $donationID,
                    "name" => (isset($request->name) ? $request->name : 'Anonymous Donor'),
                    "user_id" => $user_id,
                ]
            );

            return Paystack::getAuthorizationUrl($data)->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Donations $donations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donations $donations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donations $donations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donations $donations)
    {
        //
    }
}
