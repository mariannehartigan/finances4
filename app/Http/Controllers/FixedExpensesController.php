<?php

namespace App\Http\Controllers;

use App\Models\FixedExpense;
use Illuminate\Http\Request;

class FixedExpensesController extends Controller
{
    public function store(Request $request)
    {
        $request->user()->fixedExpenses()->create($request->all());
        return redirect()->route('home');
    }

    public function update(Request $request, FixedExpense $fixedExpense)
    {
        $fixedExpense->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(FixedExpense $fixedExpense)
    {
        $fixedExpense->delete();
        return redirect()->back();
    }
}
