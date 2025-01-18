<?php

namespace App\Http\Controllers;

use App\Models\FutureVariableExpense;
use Illuminate\Http\Request;

class FutureVariableExpensesController extends Controller
{
    public function store(Request $request)
    {
        FutureVariableExpense::create($request->all());
        return redirect()->route('home');
    }

    public function update(Request $request, FutureVariableExpense $futureVariableExpense)
    {
        $futureVariableExpense->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(FutureVariableExpense $futureVariableExpense)
    {
        $futureVariableExpense->delete();
        return redirect()->back();
    }
}
