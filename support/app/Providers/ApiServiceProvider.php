<?php

namespace App\Providers;

use App\Classes\ApiService;
use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
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
        $this->app->singleton('api', function ($app) {
            return new ApiService();
        });


        $this->app->alias('api', 'App\Classes\ApiService');
    }

    /*
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'api',
        ];
    }
}
