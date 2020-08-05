<?php

namespace EngineLayoutBase\App\DataProviders\Contracts\Ecommerce;


interface CategoriesInterface
{
    /**
     * Provides a collection with many categories ordered by depth as a tree.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collection();
}