<?php

namespace Matriphe\Manekin;

use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class ManekinServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     */
    public function register()
    {
        $this->app->singleton(Generator::class, function () {
            return Factory::create();
        });
    }
}
