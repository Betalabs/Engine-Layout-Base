<?php

namespace EngineLayoutBase\App\Services;


use Illuminate\Support\Str;

class DataProviders
{
    public function __call($dataProviderName, $arguments)
    {
        $dataProviderNamespace = "\\EngineLayoutBase\\App\\DataProviders\\Ecommerce\\";
        $classname = $dataProviderNamespace.Str::studly($dataProviderName);

        return app()->make($classname, $arguments);
    }
}