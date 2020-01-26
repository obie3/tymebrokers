<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DebitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Debit\DebitContract',
        'App\Repositories\Debit\EloquentDebitRepository');
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
