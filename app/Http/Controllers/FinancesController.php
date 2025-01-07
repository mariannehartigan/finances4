<?php

namespace App\Http\Controllers;

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
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FinancesController extends Controller
{
    /*use AuthorizesRequests;

    public function __construct()
    {
        $this->authorizeResource(Income::class, 'income');
    }*/

    public function index()
    {
        /*$this->authorize('view', User::class, Income::class);*/
        /*$id=Auth::id();*/
        return inertia(
            /* This gives the vue page */
            'Finances/FinancesMain',
            /* This passes the data to the vue page */
            [
                'incomes' => Income::all()/*->where('user_id', $id)*/,
                'actualIncomes' => ActualIncome::all(),
                'futureIncomes' => FutureIncome::all(),
                'fixedExpenses' => FixedExpense::all(),
                'actualFixedExpenses' => ActualFixedExpense::all(),
                'futureFixedExpenses' => FutureFixedExpense::all(),
                'variableExpenses' => VariableExpense::all(),
                'actualVariableExpenses' => ActualVariableExpense::all(),
                'futureVariableExpenses' => FutureVariableExpense::all(),
                'isAdmin' => Auth::id(),
            ]
        );
    }
}
