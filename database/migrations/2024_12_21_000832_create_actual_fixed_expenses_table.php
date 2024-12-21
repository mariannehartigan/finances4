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
        Schema::create('actual_fixed_expenses', function (Blueprint $table) {
            $table->text('id')->nullable();
            $table->text('description')->nullable();
            $table->text('amount')->nullable();
            $table->text('day_due')->nullable();
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actual_fixed_expenses');
    }
};
