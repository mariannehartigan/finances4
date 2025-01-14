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
        Schema::table('future_fixed_expenses', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\FixedExpense::class, 'fixed_expense_id')->constrained('fixed_expenses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('future_fixed_expenses', function (Blueprint $table) {
            //
        });
    }
};
