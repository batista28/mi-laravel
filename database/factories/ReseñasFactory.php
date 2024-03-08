<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reseñas>
 */
class ReseñasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'contenido' => fake()->text(),
            'puntuacion' => fake()->randomNumber(1, 10),
            'cliente_id' => fake()->numberBetween(1, 10),
            'manga_id' => fake()->numberBetween(1, 10),

        ];
    }
}
