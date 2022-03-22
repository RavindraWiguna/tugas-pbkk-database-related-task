<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Article;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Buat 4 categori utama
        Category::create([
            'name' => "Math",
            'slug' => "math"
        ]);

        Category::create([
            'name' => "Science",
            'slug' => 'science'
        ]);

        Category::create([
            'name' => "History",
            'slug' => 'history'
        ]);

        Category::create([
            'name' => 'Mystery',
            'slug' => 'mystery'
        ]);

        Category::create([
            "name" => "Other",
            'slug' => "other"
        ]);

        Article::factory(20)->create();
    }
}
