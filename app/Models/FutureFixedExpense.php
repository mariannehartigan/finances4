<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class FutureFixedExpense extends Model
{
    use HasFactory;

    protected $fillable = ['expense_id', 'amount', 'effective_date'];

    public $timestamps = false;
}
