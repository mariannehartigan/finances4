<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActualVariableExpense;

class ActualVariableExpensesController extends Controller
{
    public function store(Request $request)
    {
        $request->user()->actualVariableExpenses()->create($request->all());
        return redirect()->route('home');
    }

    public function update(Request $request, ActualVariableExpense $actualVariableExpense)
    {
        $actualVariableExpense->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(ActualVariableExpense $actualVariableExpense)
    {
        $actualVariableExpense->delete();
        return redirect()->back();
    }
}
