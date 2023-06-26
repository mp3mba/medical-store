<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'vaccines'
        ]);
        Category::create([
            'category_name' => 'antibiotics'
        ]);
        Category::create([
            'category_name' => 'painkillers'
        ]);
    }
}
