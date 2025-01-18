<?php

namespace App\Http\Controllers;

use App\Models\ActualIncome;
use Illuminate\Http\Request;

class ActualIncomeController extends Controller
{
    public function store(Request $request)
    {
        $request->user()->actualIncomes()->create($request->all());
        return redirect()->route('home');
    }

    public function update(Request $request, ActualIncome $actualIncome)
    {
        $actualIncome->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(ActualIncome $actualIncome)
    {
        $actualIncome->delete();
        return redirect()->back();
    }
}
