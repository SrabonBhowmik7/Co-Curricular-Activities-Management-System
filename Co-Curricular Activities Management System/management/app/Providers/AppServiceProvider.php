<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//added
//use Illuminate\Support\Facades\Schema;
//
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //added
      //  Schema::defaultStringLength(150);
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
