<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\ActualIncome;
use App\Models\FutureIncome;
use App\Models\FixedExpense;
use App\Models\ActualFixedExpense;
use App\Models\FutureFixedExpense;
use App\Models\VariableExpense;
use App\Models\ActualVariableExpense;
use App\Models\FutureVariableExpense;
use Illuminate\Http\Request;

class FinancesController extends Controller
{
    public function allFinancesData()
    {
        return inertia(
            /* This gives the vue page */
            'Finances/FinancesMain',
            /* This passes the data to the vue page */
            [
                /* Income refers to the model name */
                'incomes' => Income::all(),
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
