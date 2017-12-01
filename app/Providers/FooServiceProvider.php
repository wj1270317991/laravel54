<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Lib\Tools\FooBar;

class FooServiceProvider extends ServiceProvider
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
        $this->app->singleton('foo',function(){
            return new FooBar();
        });
    }
}
