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
        Schema::create('future_variable_expenses', function (Blueprint $table) {
            $table->text('id')->nullable();
            $table->text('variable_expense_id')->nullable();
            $table->text('amount')->nullable();
            $table->text('effective_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('future_variable_expenses');
    }
};
