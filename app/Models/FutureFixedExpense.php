<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Database\Eloquent\Model;

class FutureFixedExpense extends Model
{
    use HasFactory;

    protected $fillable = ['expense_id', 'amount', 'effective_date', 'notes'];

    public $timestamps = false;

    public function futureFixedExpenses(): BelongsTo
    {
        return $this->belongsTo(
            \App\Models\FixedExpense::class, 
            'income_id'
        );
    }
}
