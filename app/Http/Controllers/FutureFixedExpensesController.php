<?php

namespace App\Http\Controllers;

use App\Models\FutureFixedExpense;
use Illuminate\Http\Request;

class FutureFixedExpensesController extends Controller
{
    public function store(Request $request)
    {
        FutureFixedExpense::create($request->all());
        return redirect()->route('home');
    }
/* FutureFixedExpense refers to the model name, $futureFixedExpense refers to the ROUTE in web.php */
    public function update(Request $request, FutureFixedExpense $futureFixedExpense)
    {
        $futureFixedExpense->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(FutureFixedExpense $futureFixedExpense)
    {
        $futureFixedExpense->delete();
        return redirect()->back();
    }
}