<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FutureVariableExpense extends Model
{
    use HasFactory;

    protected $fillable = ['variable_expense_id', 'amount', 'effetive_date'];

    public $timestamps = false;

    public function variableExpense(): BelongsTo {
        return $this->belongsTo(\App\Models\VariableExpense::class);
    }
}
