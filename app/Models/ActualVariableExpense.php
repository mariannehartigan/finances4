<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class ActualVariableExpense extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'amount', 'notes'];

    public $timestamps = false;
}
