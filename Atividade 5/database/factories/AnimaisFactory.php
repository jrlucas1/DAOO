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
                "nome" => fake()->name(),
                "sexo" => fake()->randomElement(["M", "F"]),
                "peso" => fake()->randomFloat(200, 0, 300),
                "idade" => fake()->numberBetween(12, 25),
        ];
    }
}
