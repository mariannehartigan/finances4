<?php

namespace App\Http\Controllers;

use App\Models\ActualFixedExpense;
use Illuminate\Http\Request;

class ActualFixedExpensesController extends Controller
{
    public function store(Request $request)
    {
        $request->user()->actualFixedExpenses()->create($request->all());
        return redirect()->route('home');
    }

    public function update(Request $request, ActualFixedExpense $actualFixedExpense)
    {
        $actualFixedExpense->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(ActualFixedExpense $actualFixedExpense)
    {
        $actualFixedExpense->delete();
        return redirect()->back();
    }
}
