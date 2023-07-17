<?php

namespace App\Http\Controllers;

use App\Models\Newsroom;
use App\Models\Institute;
use Illuminate\Http\Request;

class ViewController extends Controller
{
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
