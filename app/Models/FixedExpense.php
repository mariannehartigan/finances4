<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FixedExpense extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'amount', 'frequency', 'day_due', 'notes'];

    public $timestamps = false;

    public function owner(): BelongsTo {
        return $this->belongsTo(
            \App\Models\User::class,
            'user_id'
        );
    }

    public function user(): HasMany
    {
        return $this->hasMany(
            \App\Models\FixedExpense::class,
            'user_id'
        );
    }
}
