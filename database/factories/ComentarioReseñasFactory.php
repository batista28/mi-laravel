<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ComentarioReseñas>
 */
class ComentarioReseñasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reseña_id' => fake()->numberBetween(1, 10),
            'cliente_id' => fake()->numberBetween(1, 10),
            'contenido' => fake()->paragraph,
        ];
    }
}
