<?php

namespace Matriphe\Manekin;

use Illuminate\Support\ServiceProvider;
use Faker\Generator;

class ManekinServiceProvider extends ServiceProvider
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
        $this->app->singleton(Generator::class, function () {
            return Factory::create();
        });
    }
}
