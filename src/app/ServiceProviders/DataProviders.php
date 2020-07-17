<?php

namespace EngineLayoutBase\App\ServiceProviders;


use Illuminate\Support\Str;

class DataProviders
{
    public function __call(string $dataProviderName, $arguments)
    {
        $dataProviderNamespace = "\\EngineLayoutBase\\App\\DataProviders\\Ecommerce\\";
        $classname = $dataProviderNamespace.Str::studly($dataProviderName);

        return app()->make($classname, $arguments);
    }
}