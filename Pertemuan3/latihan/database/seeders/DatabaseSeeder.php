<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();
    //     for ($i = 1; $i <= 10; $i++) {
    //         User::create([
    //             'name' => 'User' . $i,
    //             'username' => 'user' . $i,
    //             'email' => 'user' . $i . 'test@example.com',
    //             'password' => bcrypt('password'),
    //         ]);
    //     }

    //     // Membuat Category secara otomatis
    //     Category::factory(5)->create();

    //     // Membuat Post secara otomatis (akan otomatis assign ke user dan category yang ada)
    //     Post::factory(50)->recycle(User::all())->recycle(Category::all())->create();
    // }

    public function run(): void
    {
        // 1. Buat 5 User Random
        User::factory(5)->create();

        // 2. Buat 2 Kategori Secara Manual (Bebas)
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal Life',
            'slug' => 'personal-life'
        ]);

        // 3. Buat 10 Post (User_id & Category_id akan random via Factory tadi)
        Post::factory(10)->create();
    }
}
