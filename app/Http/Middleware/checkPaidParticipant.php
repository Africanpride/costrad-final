<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkPaidParticipant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $user = $request->user();
        $institute = $request->route('institute');

        $transaction = Transaction::where('participant_id', $user->id)
            ->where('institute_id', $institute->id)
            ->first();

        if (!$transaction) {
            // User has not paid, return unauthorized response or redirect
            return response('Unauthorized', 401);
        }

        return $next($request);
    }
}
