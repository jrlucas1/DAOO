<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                "nome" => fake()->word(),
                "descricao" => fake()->sentence(),
                "preco" => fake()->randomFloat(2, 0, 8),
                "quantidade" => fake()->numberBetween(1, 15),
                "atividades_id" => fake()->numberBetween(1, 15)
        ];
    }
}
