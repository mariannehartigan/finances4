<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActualVariableExpense>
 */
class ActualVariableExpenseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'description' => fake()->randomElement(['Budget1', 'Budget2', 'Budget3']),
            'amount' => fake()->numberBetween(7, 300),
        ];
    }
}
