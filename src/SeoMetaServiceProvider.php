<?php

namespace Paulund\SeoMeta;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Paulund\SeoMeta\View\Components\Meta;

class SeoMetaServiceProvider extends ServiceProvider
{
    #[\Override]
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config' => config_path(),
        ], 'paulund/seo-meta');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'seo-meta');
        Blade::component('meta', Meta::class);
    }
}
