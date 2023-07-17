<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        $institute = Institute::with('videos', 'participants')->findOrFail($id);
        return view('myEnrolments', compact('institute'));
    }
}
