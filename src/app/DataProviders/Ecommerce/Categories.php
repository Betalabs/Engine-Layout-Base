<?php

namespace EngineLayoutBase\App\DataProviders\Ecommerce;


use EngineLayoutBase\App\DataProviders\AbstractDataProvider;
use EngineLayoutBase\App\DataProviders\Contracts\Ecommerce\CategoriesInterface;
use EngineLayoutBase\App\Models\Category;

class Categories extends AbstractDataProvider implements CategoriesInterface
{
    public function collection()
    {
        return Category::query()->where('depth', 0)->get();
    }
}