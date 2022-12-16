<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('product_categories')->upsert([
            [
                'name' => 'Women',
                'slug' => 'women',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor',
            ],
            [
                'name' => 'Men',
                'slug' => 'men',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor',
            ],
            [
                'name' => 'Kid',
                'slug' => 'kid',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor',
            ],
            [
                'name' => 'Accessories',
                'slug' => 'accessories',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor',
            ]
        ], ['slug']);
    }
}
