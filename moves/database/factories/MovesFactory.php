<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Moves>
 */
class MovesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cliente' => $this->faker->name(),
            'numContainer' => $this->faker->randomDigitNotNull(),
            'tipo' => $this->faker->randomElement([20, 40]),
            'status' => $this->faker->randomElement(['cheio', 'vazio']),
            'categoria' => $this->faker->randomElement(['importacão', 'exportacão']),
        ];
    }
}
