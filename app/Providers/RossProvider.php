<?php

namespace App\Providers;

use App\Ross\Bus\Bus;
use Illuminate\Support\ServiceProvider;

class RossProvider extends ServiceProvider
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
        $this->app->bind('App\Ross\Contracts\Bus\BusContract',function()
        {
            return new Bus();
        });
    }

    public function provides()
    {
        return array('App\Ross\Contracts\Bus\BusContract');
    }
}
