<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Income>
 */
class IncomeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'description' => fake()->company(),
            'amount' => fake()->numberBetween(100, 4000),
            'day_deposited' => fake()->numberBetween(1, 31),
            'frequency' => fake()->randomElement(['Monthly', 'Quarterly', 'Yearly']),
            'notes' => fake()->sentence(),
        ];
    }
}
