<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animais>
 */
class AnimaisFactory extends Factory
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
                "sexo" => fake()->randomElement(["M", "F"]),
                "peso" => fake()->randomFloat(3, 0, 8),
                "idade" => fake()->numberBetween(1, 25),
        ];
    }
}
