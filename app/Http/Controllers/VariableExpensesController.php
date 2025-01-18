<?php

namespace App\Http\Controllers;

use App\Models\VariableExpense;
use Illuminate\Http\Request;

class VariableExpensesController extends Controller
{
    public function store(Request $request)
    {
        $request->user()->variableExpenses()->create($request->all());
        return redirect()->route('home');
    }

    public function update(Request $request, VariableExpense $variableExpense)
    {
        $variableExpense->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(VariableExpense $variableExpense)
    {
        $variableExpense->delete();
        return redirect()->back();
    }
}