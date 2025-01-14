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
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Gate;

class FinancesController extends Controller
{
    public function index(User $user, Income $income)
    {
        $id=Auth::id();
        $user = Auth::user();
        $incomes = $user->incomes;
        //$futureIncomes = $user->incomes()->with('futureIncomes')->get();
        //dd($user->futureIncomes);
        $futureIncomes=$user->futureIncomes;
        //$futureIncomes = $user->incomes->futureIncome;


        return inertia(
            /* This gives the vue page */
            'Finances/FinancesMain',
            /* This passes the data to the vue page */
            [
                //'incomes' => Income::all()->where('user_id', $id),
                'incomes' => $incomes,
                //'futureIncomes' => FutureIncome::all(),
                'futureIncomes' => $futureIncomes,
                'fixedExpenses' => FixedExpense::all(),
                'futureFixedExpenses' => FutureFixedExpense::all(),
                /*'actualIncomes' => ActualIncome::all(),
                'actualFixedExpenses' => ActualFixedExpense::all(),
                'variableExpenses' => VariableExpense::all(),
                'actualVariableExpenses' => ActualVariableExpense::all(),
                'futureVariableExpenses' => FutureVariableExpense::all(),*/
                'isAdmin' => Auth::user()->is_admin,
                'userId' => Auth::user()->id,
            ]
        );
    }
}
