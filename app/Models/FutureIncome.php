<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FutureIncome extends Model
{
    use HasFactory;

    protected $fillable = ['income_id', 'effective_date', 'amount', 'notes'];

    public $timestamps = false;

    public function futureIncomes(): BelongsTo
    {
        return $this->belongsTo(
            \App\Models\Income::class, 
            'income_id'
        );
    }
}
