<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Category::create([
            'name' => 'Photography',
            'slug' => 'photography',
        ]);

        Category::create([
            'name' => 'Internet',
            'slug' => 'internet',
        ]);

        Blog::factory(20)->create();


    }
}