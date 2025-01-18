<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ActualFixedExpense>
 */
class ActualFixedExpenseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'year' => fake()->year('2025'),
            'month' => fake()->monthName(),
            'day' => fake()->numberBetween(1, 31),
            'description' => fake()->randomElement(['Expense1', 'Expense2', 'Expense3']),
            'amount' => fake()->numberBetween(100, 2000),
            'notes' => fake()->sentence(),
        ];
    }
}
