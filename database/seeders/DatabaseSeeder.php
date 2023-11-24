<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userA = User::factory()->create();
        $userB = User::factory()->create();
        $userC = User::factory()->create();

        $categoryA = Category::factory()->create();
        $categoryB = Category::factory()->create();
        $categoryC = Category::factory()->create();

        Post::factory(5)->create([
            "user_id"=> $userA->id,
            "category_id"=> $categoryA->id,
        ]);

        Post::factory(5)->create([
            "user_id"=> $userA->id,
            "category_id"=> $categoryB->id,
        ]);

        Post::factory(5)->create([
            "user_id"=> $userA->id,
            "category_id"=> $categoryC->id,
        ]);

        Post::factory(5)->create([
            "user_id"=> $userB->id,
            "category_id"=> $categoryA->id,
        ]);

        Post::factory(5)->create([
            "user_id"=> $userB->id,
            "category_id"=> $categoryB->id,
        ]);

        Post::factory(5)->create([
            "user_id"=> $userB->id,
            "category_id"=> $categoryC->id,
        ]);

        Post::factory(5)->create([
            "user_id"=> $userC->id,
            "category_id"=> $categoryA->id,
        ]);

        Post::factory(5)->create([
            "user_id"=> $userC->id,
            "category_id"=> $categoryB->id,
        ]);

        Post::factory(5)->create([
            "user_id"=> $userC->id,
            "category_id"=> $categoryC->id,
        ]);
    }
}
