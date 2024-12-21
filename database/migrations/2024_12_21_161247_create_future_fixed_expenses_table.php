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
        Schema::create('future_fixed_expenses', function (Blueprint $table) {
            $table->text('id')->nullable();
            $table->text('expense_id')->nullable();
            $table->text('effective_date')->nullable();
            $table->text('amount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('future_fixed_expenses');
    }
};
