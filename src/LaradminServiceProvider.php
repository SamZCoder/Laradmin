<?php

namespace  CoderSam\Laradmin;

use Closure;
use Illuminate\Support\ServiceProvider;

class LaradminServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/Views', 'laradmin');
        $this->mergeConfigFrom(__DIR__.'/Config/laradmin.php', 'laradmin');

        //Publishes
        $this->publishes([
            __DIR__.'/../public' => public_path('codersam/laradmin')
        ], 'public');

    }

    public function register()
    {

    }
}
