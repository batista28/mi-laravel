<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AutorManga>
 */
class AutorMangaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'manga_id' => fake()->numberBetween(1, 10),
            'autor_id' => fake()->numberBetween(1, 10),
        ];
    }
}
