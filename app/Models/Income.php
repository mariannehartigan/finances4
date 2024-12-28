<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Income extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'amount', 'day_deposited', 'frequency', 'notes'];

    public $timestamps = false;

    public function futureIncomes(): HasMany
    {
        return $this->hasMany(
            \App\Models\FutureIncome::class,
            'income_id'
        );
    }
}
