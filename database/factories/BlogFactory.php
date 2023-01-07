<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(random_int(2,8)),
            'slug' => fake()->unique()->slug(random_int(2,5)),
            'excerpt' => fake()->paragraph(),
            'body' => fake()->paragraph(random_int(2,8)),
            'category_id' => random_int(1,2),
            'user_id' => random_int(1,10)
        ];
    }
}