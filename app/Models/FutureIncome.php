<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FutureIncome extends Model
{
    use HasFactory;

    protected $fillable = ['income_id', 'effective_date', 'amount'];

    public $timestamps = false;
}
