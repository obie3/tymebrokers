<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AccountDetailsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\AccountDetails\AccountDetailsContract',
        'App\Repositories\AccountDetails\EloquentAccountDetailsRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
