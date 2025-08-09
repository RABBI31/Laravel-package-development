<?php

namespace MyVendor\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'helloworld');

        $this->publishes([
            __DIR__.'/../config/helloworld.php' => config_path('helloworld.php'),
        ], 'config');
    }

    public function register()
    {
        //
    }
}
