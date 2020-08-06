<?php

namespace EngineLayoutBase\Database\Seeds;

use EngineLayoutBase\App\Models\Category;
use EngineLayoutBase\App\Models\Url;
use Illuminate\Database\Seeder;

class CategoryUrlsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::all()->each(function (Category $category) {
            factory(Url::class)->create([
                'urlable_id' => $category->getKey(),
                'urlable_type' => $category->getMorphClass()
            ]);
        });
    }
}
