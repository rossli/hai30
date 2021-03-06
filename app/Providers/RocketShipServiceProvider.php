<?php

namespace App\Providers;

use App\Helpers\RocketShip;
use App\Helpers\RocketLauncher;
use Illuminate\Support\ServiceProvider;

class RocketShipServiceProvider extends ServiceProvider
{
    protected $defer = true;
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
        $this->app->singleton('App\Helpers\Contracts\RocketShipContract',function()
        {
            //return new RocketShip();
            return new RocketLauncher();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['App\Helpers\Contracts\RocketShipContract'];

    }
}
