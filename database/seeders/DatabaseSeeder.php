<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
          'name' => 'Admin',
          'email' => 'test@example.com',
          'is_admin' => true
        ]);
        \App\Models\User::factory()->create([
          'name' => 'Not Admin',
          'email' => 'test2@example.com',
          'is_admin' => false
        ]);
        \App\Models\Income::factory(3)->create([
          'user_id' => 1
        ]);
        \App\Models\Income::factory(3)->create([
          'user_id' => 2
        ]);
        \App\Models\FutureIncome::factory(2)->create([
          'income_id' => 1
        ]);
        \App\Models\FutureIncome::factory(2)->create([
          'income_id' => 2
        ]);
        \App\Models\FutureIncome::factory(2)->create([
          'income_id' => 3
        ]);
        \App\Models\FutureIncome::factory(2)->create([
          'income_id' => 4
        ]);
        \App\Models\FutureIncome::factory(2)->create([
          'income_id' => 5
        ]);
        \App\Models\FutureIncome::factory(2)->create([
          'income_id' => 6
        ]);
        \App\Models\FixedExpense::factory(3)->create([
          'user_id' => 1
        ]);
        \App\Models\FixedExpense::factory(3)->create([
          'user_id' => 2
        ]);
        \App\Models\FutureFixedExpense::factory(2)->create([
          'fixed_expense_id' => 1
        ]);
        \App\Models\FutureFixedExpense::factory(2)->create([
          'fixed_expense_id' => 2
        ]);
        \App\Models\VariableExpense::factory(5)->create();
    }
}