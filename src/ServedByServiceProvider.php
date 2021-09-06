<?php

namespace Creativeorange\ServedBy;

use App\Http\Kernel;
use Creativeorange\ServedBy\Http\Middleware\ServedBy;
use Illuminate\Support\ServiceProvider;

class ServedByServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('served-by.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'served-by');
    }
}
