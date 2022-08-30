<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    public function run()
    {
        $tags = ['carne', 'pesce', 'vegetariano', 'vegano', 'senza lattosio', 'senza glutine'];

        foreach ($tags as $tag) {
            Tag::create([
                "name" => $tag,
                "slug" => Str::slug($tag)
            ]);
        }
    }
}
