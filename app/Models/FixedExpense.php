<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class FixedExpense extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'amount', 'frequency', 'day_due', 'notes'];

    public $timestamps = false;
}
