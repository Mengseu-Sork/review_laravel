<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $categoryIds = Category::pluck('id');

        for ($i = 0; $i < 25; $i++) {
            Post::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'category_id' => $faker->randomElement($categoryIds),
            ]);
        }
    }
}