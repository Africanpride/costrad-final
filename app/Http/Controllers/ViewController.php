<?php

namespace App\Http\Controllers;

use PDF;
// use Barryvdh\DomPDF\PDF;
use App\Models\Invoice;
use App\Models\Newsroom;
use App\Models\Institute;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ViewController extends Controller
{
    public function pdf_invoice(Request $request)
    {
        // Print invoice to pdf through this controller method

        $invoice = Invoice::whereId($request->invoice)->with('transactions', 'institute')->first();
        $institute = Institute::whereId($request->institute)->first();
        // dd($invoice);

        // $data = [
        //     'invoice_id' => $invoice->id,
        //     'invoice_totalAmount' => $invoice->totalAmount,
        //     'invoice_status' => $invoice->status,
        //     'institute_logo' => $institute->logo,
        //     'institute_name' => $institute->name,
        //     'institute_acronym' => $institute->acronym,
        //     'institute_overview' => $institute->overview,
        //     'institute_introduction' => $institute->introduction,
        //     'institute_about' => $institute->about,
        //     'institute_icon' => $institute->icon,
        //     'institute_banner' => $institute->banner,
        //     'institute_startDate' => $institute->startDate,
        //     'institute_endDate' => $institute->endDate,
        //     'institute_seo' => $institute->seo,
        //     'institute_active' => $institute->active,
        //     'institute_slug' => $institute->slug,
        //     'institute_price' => $institute->price,
        //     'participant_id' => $invoice->participant_id,
        //     'transaction_id' => $invoice->transaction_id,
        //     'institute_id' => $invoice->institute_id,
        //     'outstandingAmount' => $invoice->outstandingAmount,
        // ];


        // dd($invoice);
        $pdf = PDF::loadView('pdf_invoice', compact('invoice','institute'))->setPaper('a4', 'landscape')->setWarnings(false);
        return $pdf->download('invoice.pdf');


        // return new Response($output, 200, [
        //     'Content-Type' => 'application/pdf',
        //    'Content-Disposition' =>  'inline; filename="invoice2.pdf"',
        //  ]);

    }

    public function home()
    {
        $latest = Newsroom::latest()->take(4)->get();
        $upcomingInstitute = Institute::where('startDate', '>', now())
            ->orderBy('startDate', 'asc')
            ->first();
        return view('home', compact('latest', 'upcomingInstitute'));
    }

    public function news()
    {
        $latest = Newsroom::latest()->take(2)->get();
        $news = Newsroom::whereNotIn('id', $latest->pluck('id'))->latest()->paginate(4);
        $firstLatest = $latest->first();
        $secondLatest = $latest->skip(1)->first();
        return view('news', compact('news', 'latest', 'firstLatest', 'secondLatest'));
    }
    public function terms()
    {
        return view('terms');
    }

    public function help()
    {
        return view('help');
    }

    public function topics()
    {
        return view('topics');
    }

    public function donate()
    {
        return view('donate');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function dmca()
    {
        return view('dmca');
    }

    public function about()
    {
        return view('about');
    }

    public function documentation()
    {
        return view('documentation');
    }

    public function contact()
    {
        return view('contact');
    }

    public function ourProcess()
    {
        return view('our-process');
    }

    public function institutes()
    {
        return view('institutes');
    }
}
