<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AccountBalanceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\AccountBalance\AccountBalanceContract',
        'App\Repositories\AccountBalance\EloquentAccountBalanceRepository');
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
