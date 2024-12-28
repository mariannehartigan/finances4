<?php

namespace App\Http\Controllers;

use App\Models\FutureIncome;
use Illuminate\Http\Request;

class FutureIncomeController extends Controller
{
    public function store(Request $request)
    {
        /* FutureIncome::create($request->all()); */
        $request->income()->futureIncomes()->create();
        return redirect()->route('home');
    }

    public function update(Request $request, FutureIncome $futureIncome)
    {
        $futureIncome->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(FutureIncome $futureIncome)
    {
        $futureIncome->delete();
        return redirect()->back();
    }
}
