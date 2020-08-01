<?php

namespace EngineLayoutBase\App\ServiceProviders;


use EngineLayoutBase\App\Services\DataProviders;
use Illuminate\Support\ServiceProvider;

class DataProvidersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Do nothing...
    }

    // Use to declare Facades
    public function register()
    {
        $this->app->instance('data-providers', new DataProviders);
    }
}