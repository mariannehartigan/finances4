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
        Schema::table('future_incomes', function (Blueprint $table) {
            // constrained('incomes') - incomes is the table name, connects the 'id' field of incomes
            /*$table->foreign('income_id')->references('id')->on('incomes')->onDelete('cascade');*/
            $table->foreignIdFor(\App\Models\Income::class, 'income_id')->constrained('incomes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('future_incomes', function (Blueprint $table) {
            //
        });
    }
};

