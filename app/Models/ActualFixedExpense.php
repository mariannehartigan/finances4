<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActualFixedExpense extends Model
{
    use HasFactory;

    protected $fillable = ['year', 'month', 'day', 'description', 'amount', 'notes'];

    public $timestamps = false;

    public function user(): BelongsTo {
        return $this->belongsTo(\App\Models\User::class);
    }
}
