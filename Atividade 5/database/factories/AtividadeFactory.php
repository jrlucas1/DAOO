<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Atividades>
 */
class AtividadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                "desc" => fake()->word(),
                "valor" => fake()->randomFloat(2, 0, 8),
                "status" => fake()->numberBetween(1, 15),
                "id_produto" => fake()->numberBetween(1, 15),
        ];
    }
}
