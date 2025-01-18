<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActualIncome>
 */
class ActualIncomeFactory extends Factory
{

    public function definition(): array
    {
        return [
            'year' => fake()->year('2025'),
            'month' => fake()->monthName(),
            'day' => fake()->numberBetween(1, 31),
            'description' => fake()->randomElement(['Employer1', 'Employer2', 'Employer3']),
            'amount' => fake()->numberBetween(100, 4000),
        ];
    }
}
