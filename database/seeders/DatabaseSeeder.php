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
          'name' => 'Test User',
          'email' => 'test@example.com',
          'is_admin' => true
        ]);
        \App\Models\User::factory()->create([
          'name' => 'Test User',
          'email' => 'test2@example.com',
        ]);
        \App\Models\Income::factory(5)->create([
        ]);
        \App\Models\FutureIncome::factory(5)->create([
          'income_id' => 1
        ]);
        \App\Models\FixedExpense::factory(5)->create();
        \App\Models\VariableExpense::factory(5)->create();
    }
}