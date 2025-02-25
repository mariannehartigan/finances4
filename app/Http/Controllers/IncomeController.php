<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function store(Request $request)
    {
        /*what does "incomes" refer to?*/
        $request->user()->incomes()->create($request->all());
        return redirect()->route('home');
    }

    public function update(Request $request, Income $income)
    {
        $income->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(Income $income)
    {
        $income->delete();
        return redirect()->back();
    }
}
