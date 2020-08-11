<?php

namespace EngineLayoutBase\App\ServiceProviders;


use Illuminate\Support\ServiceProvider;

class ConfigurationsServiceProvider extends ServiceProvider
{
    /**
     * Load migrations and factories.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/layout-base.php' => config_path('layout-base.php'),
        ]);
    }
}