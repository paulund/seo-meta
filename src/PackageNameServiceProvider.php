<?php

namespace VendorName\PackageName;

use Illuminate\Support\ServiceProvider;

class PackageNameServiceProvider extends ServiceProvider
{
    #[\Override]
    public function register() {}

    public function boot()
    {
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/Http/Routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'vendor-name/package-name');
        $this->publishes([
            __DIR__.'/../config' => config_path(),
        ], 'vendor-name/package-name');

        if ($this->app->runningInConsole()) {
            $this->commands([
                // add commands here
            ]);
        }
    }
}
