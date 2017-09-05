<?php

namespace SquareBoat\Mixtracker;

use Illuminate\Support\ServiceProvider;

class MixtrackerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/mixtracker.php' => config_path('mixtracker.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('mixtracker', function () {
            return $this->app->make(Mixtracker::class);
        });
    }
}
