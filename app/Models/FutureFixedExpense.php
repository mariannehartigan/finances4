<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class FutureFixedExpense extends Model
{
    use HasFactory;
    /*is fixed_expense_id necessary? Worked with a typo*/
    protected $fillable = ['fixed_expense_id', 'amount', 'effective_date', 'notes'];

    public $timestamps = false;

    public function fixedExpense(): BelongsTo {
        return $this->belongsTo(\App\Models\FixedExpense::class);
    }
}
