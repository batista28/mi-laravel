<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetallePedido>
 */
class DetallePedidoFactory extends Factory
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
            'pedido_id' => fake()->numberBetween(1, 10),
            'cantidad' => fake()->numberBetween(1, 10),
        ];
    }
}
