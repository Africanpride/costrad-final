<?php

use Carbon\Carbon;
use App\Models\User;
use App\Models\Invoice;
use App\Models\Newsroom;
use App\Models\Institute;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Spatie\Analytics\Period;
use Illuminate\Support\HtmlString;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Spatie\Analytics\Facades\Analytics;
use App\Http\Controllers\ViewController;
use Laravel\Socialite\Facades\Socialite;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactController;
use Lwwcas\LaravelCountries\Models\Country;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\NewsroomController;
use App\Http\Middleware\UserEnrollmentCheck;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DisplayInstituteController;

Route::get('banned', function () {
    return view('auth.banned');
})->name('banned')->middleware('auth');


// payment & Social Logins
Route::get('auth/google', [App\Http\Controllers\LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [App\Http\Controllers\LoginController::class, 'handleGoogleCallback']);

Route::resource('donation', DonationController::class);

Route::get('pay', function () {
    return to_route('home');
});

Route::get('payment/installment-payment/{institute}/{invoice}', function ($institute = null, $invoice = null) {

    return to_route('invoices');
})->name('installment-payment')->middleware('auth');

Route::get('pdf_invoice', function () {
    // return error
    return redirect()->to_route('home');
});

Route::post('pdf_invoice', [ViewController::class, 'pdf_invoice'])->name('pdf_invoice');


Route::post('payment/installment-payment/{institute}/{invoice}', function ($institute = null, $invoice = null) {
    $invoice = Invoice::whereId($invoice)->with('transactions', 'institute')->first();
    $institute = Institute::whereId($institute)->first();
    // dd($institute);
    return view('payment/installment-payment', [
        'institute' => $institute,
        'invoice' => $invoice
    ]);
})->name('installment-payment')->middleware('auth');

Route::get('testCustomer' , function() {
    $reference = '0zKDjBJ0D9lzWoV3be8oN4FVb'; // Replace this with the actual reference value

    $secretKey = env('PAYSTACK_SECRET_KEY');

    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $secretKey,
    ])->get('https://api.paystack.co/transaction/verify/' . $reference);

    // Check if the request was successful (status code 2xx)
    if ($response->successful()) {
        $responseData = $response->json();

        // Process the $customers array containing the list of customers
        dd($responseData);
    } else {
        // Handle the case when the request was not successful
        $errorMessage = $response->body();
        // Handle the error message appropriately
        dd($errorMessage);
    }
});

Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])
    ->name('pay')
    ->middleware('auth', 'preventduplicatetransaction');

Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback'])
    ->name('payment')
    ->middleware('verifyWebhookIP');

// end payment




Route::get('pdf_invoice', [ViewController::class, 'pdf_invoice']);
Route::get('terms', [ViewController::class, 'terms']);
Route::get('help', [ViewController::class, 'help']);
Route::get('topics', [ViewController::class, 'topics']);
Route::get('donate', [ViewController::class, 'donate']);
Route::get('privacy', [ViewController::class, 'privacy']);
Route::get('dmca', [ViewController::class, 'dmca']);
Route::get('about', [ViewController::class, 'about']);
Route::get('documentation', [ViewController::class, 'documentation']);
Route::get('contact', [ViewController::class, 'contact']);
Route::get('our-process', [ViewController::class, 'ourProcess']);
Route::get('institutes', [ViewController::class, 'institutes']);
Route::get('/', [ViewController::class, 'home'])->name('home');
Route::get('news', [ViewController::class, 'news'])->name('news');

Route::get('test4', function () {
    // return view('test4');
    return __FILE__;
})->name('test4')->middleware('auth');



Route::get('myEnrolments/{id}', EnrollmentController::class)
    ->name('myEnrolments')
    ->middleware(['auth', UserEnrollmentCheck::class]);

Route::get('test3', function () {
    $institutes = Institute::all();
    $roles = Role::paginate();
    $permissions = Permission::all();
    return view('test3', compact('roles', 'permissions', 'institutes'));
});

// display a particular institute using slug as parameter for the flrontend
Route::get('/institutes/{slug}', [DisplayInstituteController::class, 'show'])->name('institute.show');

Route::get('institutes', function () {
    $institutes = Institute::get();
    $nextInstitute = Institute::where('startDate', '>', now())
        ->orderBy('startDate', 'asc')
        ->first();
    return view('institutes.index', compact('institutes', 'nextInstitute'));
})->name('institutes');

Route::get('/news/{newsroom:slug}', [NewsroomController::class, 'show'])->name('news.show');
Route::post('contact', ContactController::class)->name('contact-form');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});



// Participants and Everyone else  Routes
Route::middleware(['auth', config('jetstream.auth_session'), 'setNewPassword'])->group(function () {

    Route::get('dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');




Route::get('invoices', function () {

        $myInvoices = Invoice::whereParticipantId(Auth::user()->id)->with('transactions', 'institute')->get();
        // dd($myInvoices);

        return view('user.invoices', compact('myInvoices'));
    })->name('invoices')->middleware('auth');





    Route::get('/profile', function () {
        return view('profile.show');
    });
});

Route::get('set_password', function () {
    return view('auth.set_password');
})->name('set_password')->middleware('auth', config('jetstream.auth_session'));


// Admin Routes
Route::middleware(['auth', 'banned', 'mustBeAdmin', config('jetstream.auth_session')])->prefix('admin')->group(function () {

    Route::get('participants/', function () {
        $participants = User::participant()->get();
        return view('admin/participants/index', compact('participants'));
    })->name('admin.participants');

    Route::get('institute/enrollments', [InstituteController::class, 'enrollments'])->name('enrollments');
    Route::get('institute/prep', [InstituteController::class, 'prep'])->name('institute.prep');
    Route::resource('institutes', InstituteController::class);
    Route::resource('transactions', TransactionController::class);
    Route::resource('announcements', AnnouncementController::class);
    Route::resource('newsroom', NewsroomController::class);
    Route::resource('video', VideoController::class);
    Route::get('donation', [DonationController::class, 'index']);

    Route::get('calender', function () {
        return view('admin.calender');
    })->name('calender');

    Route::get('settings', function () {
        return view('admin.settings');
    })->name('admin.settings');

    Route::get('analytics', function () {
        return view('admin.analytics');
    })->name('admin.analytics');


    Route::get('media', function () {
        return view('admin.media');
    })->name('admin.media');

    Route::get('dashboard', function () {
        $latest = User::take(7)->orderBy('created_at', 'desc')->get();
        return view('admin.dashboard', compact('latest'));
    })->name('admin.dashboard');

    Route::get('/roles/manage-roles', function () {
        $users = User::all();
        return view('admin/roles/manage-roles', compact('users'));
    })->name('roles');

    Route::get('logs', function () {
        return view('admin.logs');
    })->name('logs');

    Route::get('staff', function () {
        $users = User::staff()->paginate(8);
        return view('staff.index', compact('users'));
    })->name('staff');
});

Route::get('/faculty', function () {
    return view('faculty.index');
})->name('faculty')->middleware(['auth', 'banned', config('jetstream.auth_session')]);




Route::get('invoice', function () {
    return view('invoice');
});

Route::get('test5', function (Request $request) {
    // dd($request->all());
    return view('test5');
})->middleware('auth');



Route::post('test5', function (Request $request) {
    dd($request->all());
    // return view('test5');
})->name('test5')->middleware('auth');



Route::get('flags', function () {
    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

    $random_country = $countries[array_rand($countries)];
    echo $random_country;
    // $country = 'ghana';
    // $response = Http::get("https://restcountries.com/v3.1/name/{$country}");
    // $data = $response->json();
    // dd($data);
    // dd($data[0]['flag']);
    // $flagUrl = $data['flags']['png'];
    // return $flagUrl;
})->name('flags');




Route::get('nations', function () {


    // Get the current date
    $today = date('Y-m-d');

    // Find the first instance of an institute where startDate is greater than today's date
    $upcomingInstitute = Institute::where('startDate', '>', $today)
        ->orderBy('startDate', 'asc')
        ->first();

    // If no upcoming institute was found, return null
    if (!$upcomingInstitute) {
        return null;
    }

    return $upcomingInstitute->name;

    // return Institute::count();
})->name('nations');


Route::get('test', function () {
    // session()->flash('flash.bannerStyle', 'success');
    session()->flash('flash.banner', 'Hello world');

    return view('test', ['costrad' => Institute::whereAcronym('costrad')->first()]);
})->name('test');




Route::get('test2', function () {
    $record = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
        ->where('created_at', '>', Carbon::today()->subDay(66))
        ->groupBy('day_name', 'day')
        ->orderBy('day')
        ->get();

    $data = [];

    foreach ($record as $row) {
        $data['label'][] = $row->day_name;
        $data['data'][] = (int) $row->count;
    }

    $data['chart_data'] = json_encode($data);
    return view('test2', $data);
})->middleware('auth');
