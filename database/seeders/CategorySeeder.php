<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = ['Tech', 'Health', 'Education', 'Travel'];
        foreach ($categories as $name) {
            Category::create(['name' => $name]);
        }
    }
}

