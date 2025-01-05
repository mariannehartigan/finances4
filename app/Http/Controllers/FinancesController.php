<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Income;
use App\Models\ActualIncome;
use App\Models\FixedExpense;
use App\Models\FutureIncome;
use Illuminate\Http\Request;
use App\Models\VariableExpense;
use App\Models\ActualFixedExpense;
use App\Models\FutureFixedExpense;
use Illuminate\Support\Facades\Auth;
use App\Models\ActualVariableExpense;
use App\Models\FutureVariableExpense;

class FinancesController extends Controller
{
    public function allFinancesData(User $user)
    {
        $id=Auth::id();
        return inertia(
            /* This gives the vue page */
            'Finances/FinancesMain',
            /* This passes the data to the vue page */
            [
                /* Income refers to the model name */
                'incomes' => Income::all()->where('user_id', $id),
                'actualIncomes' => ActualIncome::all(),
                'futureIncomes' => FutureIncome::all(),
                'fixedExpenses' => FixedExpense::all(),
                'actualFixedExpenses' => ActualFixedExpense::all(),
                'futureFixedExpenses' => FutureFixedExpense::all(),
                'variableExpenses' => VariableExpense::all(),
                'actualVariableExpenses' => ActualVariableExpense::all(),
                'futureVariableExpenses' => FutureVariableExpense::all()
            ]
        );
    }

}
