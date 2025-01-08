<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function store(Request $request)
    {
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
