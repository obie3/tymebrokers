<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DepositServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Deposit\DepositContract',
        'App\Repositories\Deposit\EloquentDepositRepository');
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
