<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text(50),
            'thumbnail' => ("https://laravel.com/img/logomark.min.svg"),
            'author' => fake()->text(50),
            'publisher' => fake()->text(50),
            'publication' => fake()->dateTime(),
            'price' => fake()->randomFloat(),
            'quantity' => fake()->numberBetween(),
            'category_id' => fake()->numberBetween(1, 10)
        ];
    }
}
