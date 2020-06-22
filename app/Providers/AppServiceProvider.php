<?php

namespace App\Providers;

use App\Jobs;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer(['pages.browse-jobs', 'pages.job-page'], function ($view){
            $view->with('job', Jobs::paginate(5));

        });
    }
}
