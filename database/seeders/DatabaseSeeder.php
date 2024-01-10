<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Database\Factories\CategoryFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(30)->create();

        $categories = Category::factory(30)->create();

        for ($i = 0; $i <= 500; $i++) {
            Post::factory()->create([
                "user_id"=> $users[random_int(0, 29)]->id,
                "category_id"=> $categories[random_int(0, 29)]->id
            ]);
        }
    }
}
