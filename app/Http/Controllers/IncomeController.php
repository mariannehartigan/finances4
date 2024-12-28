<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function store(Request $request)
    {
        Income::create($request->all());

        return redirect()->route('home');
    }

    public function update(Request $request, Income $income)
    {
        $income->update($request->all());


        dd($income->futureIncomes);

        return redirect()->route('home');
    }

    public function destroy(Income $income)
    {
        $income->delete();
        return redirect()->back();
    }
}
