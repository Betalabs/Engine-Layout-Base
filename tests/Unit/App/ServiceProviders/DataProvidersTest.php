<?php

namespace EngineLayoutBase\Tests\Unit\App\ServiceProviders;


use EngineLayoutBase\App\DataProviders\Ecommerce\Categories;
use EngineLayoutBase\App\Facades\DataProviders;
use EngineLayoutBase\Tests\TestCase;
use Illuminate\Contracts\Container\BindingResolutionException;

class DataProvidersTest extends TestCase
{
    public function testFactoryFacadeCallingShouldReturnExistingObjectInstance()
    {
        $dataProvider = DataProviders::categories();
        $this->assertInstanceOf(Categories::class, $dataProvider);
    }

    public function testFactoryFacadeCallingUnexistingDataProviderShouldThrowException()
    {
        $this->expectException(BindingResolutionException::class);
        $dataProvider = DataProviders::foo();
    }
}