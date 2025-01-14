<?php

namespace App\Http\Controllers;

use App\Models\FutureIncome;
use Illuminate\Http\Request;

class FutureIncomeController extends Controller
{
    public function store(Request $request)
    {
        FutureIncome::create($request->all());
        return redirect()->route('home');
    }

    /* FutureIncome refers to the model name, $futureIncome refers to the ROUTE in web.php */
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