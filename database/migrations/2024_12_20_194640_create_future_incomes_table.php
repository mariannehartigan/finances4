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
        Schema::create('future_incomes', function (Blueprint $table) {
            $table->id();
            $table->text('amount')->nullable();
            $table->text('effective_date')->nullable();
            // constrained('incomes') - incomes is the table name
            $table->foreignIdFor(\App\Models\Income::class, 'income_id')->constrained('incomes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('future_incomes');
    }
};
