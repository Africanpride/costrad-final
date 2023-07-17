<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Institute;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserEnrollmentCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $institute = Institute::whereId($request->id)->first();
        $user = Auth::user();

        if (!$institute) {
            abort(404, 'Institute not found');
        }

        if (!$user) {
            abort(401, 'Unauthorized');
        }

        if (!$institute->participants->contains($user)) {
            abort(401, 'Unauthorized');
        }

        return $next($request);
    }
}
