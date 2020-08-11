<?php

namespace EngineLayoutBase\App\ServiceProviders;


use Illuminate\Support\ServiceProvider;

class RoutesServiceProvider extends ServiceProvider
{
    /**
     * Load migrations and factories.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../../routes.php');
    }
}