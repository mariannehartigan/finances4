<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class VariableExpense extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'amount', 'frequency'];

    public $timestamps = false;
}
