<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // if ($this->environment() == 'local') {
        //     $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        //     $this->app->register('BarryVDH\Debugbar\ServiceProvider');            
        // }
    }
}
