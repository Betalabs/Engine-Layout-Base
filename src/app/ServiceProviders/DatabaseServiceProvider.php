<?php

namespace EngineLayoutBase\App\ServiceProviders;


use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Load migrations and factories.
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->loadFactoriesFrom(__DIR__.'/../../database/factories');
    }
}