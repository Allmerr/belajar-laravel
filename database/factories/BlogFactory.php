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
            'category_id' => fake()->numberBetween(1,3),
            'user_id' => fake()->numberBetween(1,8),
            'title' => fake()->sentence(random_int(2,8)),
            'slug' => fake()->unique()->slug(random_int(2,8)),
            'excerpt' => fake()->paragraph(random_int(1,3)),
            'body' => fake()->paragraph(random_int(5,10))
        ];
    }
}