<?php

namespace BeeDelivery\NextCode;

use Illuminate\Support\ServiceProvider;

class NextCodeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/nextcode.php', 'nextcode');

        // Register the service the package provides.
        $this->app->singleton('nextcode', function ($app) {
            return new NextCode;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/nextcode.php' => config_path('nextcode.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['nextcode'];
    }
}
