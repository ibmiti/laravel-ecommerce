<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use illuminate\Suppor\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Do I really need this?
        // Schema::defaultStringLength(191);
    }
}
