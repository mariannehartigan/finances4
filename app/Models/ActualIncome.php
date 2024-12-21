<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class ActualIncome extends Model
{
    use HasFactory;

    protected $fillable = ['year', 'month', 'day', 'description', 'amount', 'notes'];

    public $timestamps = false;
}
