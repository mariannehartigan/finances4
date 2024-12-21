<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class FutureVariableExpense extends Model
{
    use HasFactory;

    protected $fillable = ['variable_expense_id', 'amount', 'effetive_date'];

    public $timestamps = false;
}
