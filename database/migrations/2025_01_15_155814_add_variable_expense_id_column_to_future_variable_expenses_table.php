<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('future_variable_expenses', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\VariableExpense::class, 'variable_expense_id')->constrained('variable_expenses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('future_variable_expenses', function (Blueprint $table) {
            //
        });
    }
};
