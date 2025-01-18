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
            $table->id();
            $table->text('year')->nullable();
            $table->text('month')->nullable();
            $table->text('day')->nullable();
            $table->text('description')->nullable();
            $table->text('amount')->nullable();
            $table->text('notes')->nullable();
            $table->foreignIdFor(\App\Models\User::class, 'user_id')->constrained('users');
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
