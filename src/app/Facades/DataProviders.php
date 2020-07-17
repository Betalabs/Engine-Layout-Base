<?php

namespace EngineLayoutBase\App\Facades;


use Illuminate\Support\Facades\Facade;

class DataProviders extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'data-providers';
    }
}