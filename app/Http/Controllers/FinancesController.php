<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Income;
use Illuminate\Support\Facades\Auth;
use App\Models\ActualVariableExpense;

class FinancesController extends Controller
{
    public function index(User $user, Income $income)
    {
        $user = Auth::user();

        return inertia(
            /* This gives the vue page */
            'Finances/FinancesMain',
            /* This passes the data to the vue page */
            [
                //"incomes" and "futureIncomes" are from the models, the HasMany and HasManyThrough
                'incomes' => $user->incomes,
                'futureIncomes' => $user->futureIncomes,
                'actualIncomes' => $user->actualIncomes,

                'fixedExpenses' => $user->fixedExpenses,
                'futureFixedExpenses' => $user->futureFixedExpenses,
                'actualFixedExpenses' => $user->actualFixedExpenses,

                'variableExpenses' => $user->variableExpenses,
                'futureVariableExpenses' => $user->futureVariableExpenses,
                'actualVariableExpenses' => $user->actualVariableExpenses,
                
                'isAdmin' => Auth::user()->is_admin,
                'userId' => Auth::user()->id,
            ]
        );
    }
}
