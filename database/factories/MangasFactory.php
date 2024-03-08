<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mangas>
 */
class MangasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->sentence,
            'precio' => fake()->randomFloat(2, 5, 100),
            'stock' => fake()->numberBetween(0, 100),
            'imagen' => fake()->imageUrl,
            'genero_id' => fake()->numberBetween(1, 10),
            'editorial_id' => fake()->numberBetween(1, 10),
        ];
    }
}
