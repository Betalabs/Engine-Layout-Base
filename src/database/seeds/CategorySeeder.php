<?php

use EngineBasicTheme\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $depth0 = factory(Category::class)
            ->times(4)
            ->create([
                'depth' => 0
            ]);

        $depth0->each(function (Category $parent) {
            $depth1 = factory(Category::class)
                ->times(random_int(0, 3))
                ->create([
                    'depth' => 1,
                    'category_parent_id' => $parent->getKey()
                ]);

            $depth1->each(function (Category $parent) {
                $depth2 = factory(Category::class)
                    ->times(random_int(0, 3))
                    ->create([
                        'depth' => 2,
                        'category_parent_id' => $parent->getKey()
                    ]);

                $depth2->each(function (Category $parent) {
                    $depth3 = factory(Category::class)
                        ->times(random_int(0, 3))
                        ->create([
                            'depth' => 3,
                            'category_parent_id' => $parent->getKey()
                        ]);
                });
            });
        });

        $this->call(CategoryUrlsSeeder::class);
    }
}
