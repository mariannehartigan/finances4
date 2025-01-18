<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VariableExpense extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'amount', 'frequency'];

    public $timestamps = false;

    public function user(): BelongsTo {
        return $this->belongsTo(\App\Models\User::class);
    }
    public function futureVariableExpenses(): HasMany {
        return $this->hasMany(\App\Models\FutureVariableExpense::class);
    }
}
