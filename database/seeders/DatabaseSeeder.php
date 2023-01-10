<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blog;
use App\Models\category;
use App\Models\User;
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
        User::factory(8)->create();

        category::create([
            'name' => 'Android Development',
            'slug' => 'android-development'
        ]);
        
        category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        
        category::create([
            'name' => 'Dev Ops',
            'slug' => 'dev-ops'
        ]);

        Blog::factory(30)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}