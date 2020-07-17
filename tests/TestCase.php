<?php

namespace EngineLayoutBase\Tests;


class TestCase extends \Laravel\Lumen\Testing\TestCase
{
    public function createApplication()
    {
        $lumenApplicationBasePath = __DIR__.'/../';
        $this->app = require __DIR__.'/../src/app.php';
        return $this->app;
    }
}