<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; //untuk membuat slug
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 9)),
            'author' => $this->faker->name(),
            'slug' => $this->faker->slug(mt_rand(2, 9)),
            'excerpt' => $this->faker->paragraph(1),
            'body' => $this->faker->paragraph(mt_rand(2, 10)),
            'category_id' => mt_rand(1, 5) //random per total category
        ];
    }
}
