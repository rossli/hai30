<?php

namespace App\Providers;

use App\Libs\TestProvider;
use Illuminate\Support\ServiceProvider;

class TestUserProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        return $this->app->singleton('TestProvider',function()
        {
           return new TestProvider();
        });
    }
}
