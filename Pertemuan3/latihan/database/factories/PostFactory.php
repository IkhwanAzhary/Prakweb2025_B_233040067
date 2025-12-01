<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // public function definition(): array
    // {
    //     $title = fake()->sentence(4);
    //     return [
    //         'user_id' => \App\Models\User::factory(),
    //         'category_id' => \App\Models\Category::factory(),
    //         'title' => $title,
    //         'slug' => Str::slug($title),
    //         'excerpt' => fake()->paragraph(),
    //         'body' => fake()->paragraphs(3, true),
    //         'image' => null,
    //     ];
    // }

    public function definition(): array
{
    return [
        'title' => fake()->sentence(),
        'slug' => fake()->slug(),
        'body' => fake()->paragraph(10), // Isi artikel dummy
        'user_id' => mt_rand(1,5),       // Akan diisi user id 1 sampai 5
        'category_id' => mt_rand(1,2)    // Akan diisi category id 1 sampai 2
    ];
}
}
