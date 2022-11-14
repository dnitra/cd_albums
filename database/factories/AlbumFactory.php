<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text($maxNbChars = 30),
            "genre_id" => (fake()->randomDigit()) + 1,
            "img_url" => fake()->imageUrl($width = 640, $height = 480),
            "year_released" => fake()->year($max = now()),
            "price" => fake()->randomNumber(5),
            "rating" => (fake()->randomDigit()) + 1,
        ];
    }
}
