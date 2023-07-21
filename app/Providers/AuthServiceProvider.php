<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use routes;
use App\Models\Video;
use App\Models\Invoice;
use App\Models\Institute;
use App\Models\Transaction;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Middleware\UserEnrollmentCheck;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    protected function registerMiddleware()
    {
        $this->app['router']->aliasMiddleware('enrollmentCheck', UserEnrollmentCheck::class);
    }



    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies();

        //
        // Implicitly grant "Super Admin" role all permissions
        // This works in the app by using gate-related functions like auth()->user->can() and @can()
        // Gate::before(function ($user, $ability) {
        //     return $user->hasRole('super_admin') ? true : null;
        // });

        Gate::define('isParticipant', function ($user) {
            return $user->participant == true;
        });

        Gate::define('isAdmin', function ($user) {
            return $user->hasAnyRole(['admin', 'super_admin']);
        });

        Gate::define('userEnrolled', function ($user, Institute $institute) {
            return Invoice::where('participant_id', $user->id)->where('institute_id', $institute->id)->first();
        });
        Gate::define('pendingInvoices', function ($user) {
            return Invoice::where('participant_id', $user->id)->where('status','pending')->first();
        });
    }
}
