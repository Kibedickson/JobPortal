<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isGuest', function (){
            return auth()->id() === null;
        });
        Gate::define('isCandidate', function ($user){
            return $user->roles()->where('id', 3)->count() === 1;
        });
        Gate::define('isEmployer', function ($user){
            return $user->roles()->where('id', 2)->count() === 1;
        });

    }
}
