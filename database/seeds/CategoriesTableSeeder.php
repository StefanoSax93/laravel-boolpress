<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = ['dolce', 'salato'];

        foreach ($categories as $category) {
            Category::create([
                "name" => $category,
                "slug" => Str::slug($category)
            ]);
        }
    }
}
