<?php

use GuzzleHttp\Middleware;
use App\Models\FixedExpense;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\FinancesController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\ActualIncomeController;
use App\Http\Controllers\FutureIncomeController;
use App\Http\Controllers\FixedExpensesController;
use App\Http\Controllers\VariableExpensesController;
use App\Http\Controllers\ActualFixedExpensesController;
use App\Http\Controllers\FutureFixedExpensesController;
use App\Http\Controllers\FutureVariableExpensesController;

Route::get('login', [AuthController::class, 'create'])
  ->name('login');
Route::post('login', [AuthController::class, 'store'])
  ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
  ->name('logout');

Route::resource('user-account', UserAccountController::class)
  ->only(['create', 'store']);
  
Route::get('/', [FinancesController::class, 'index'])
  ->name('home');

Route::resource('/income', IncomeController::class)
  ->only(['store', 'update', 'destroy']);
Route::resource('/futureIncome', FutureIncomeController::class)
  ->only(['store', 'update', 'destroy']);
Route::resource('/actualIncome', ActualIncomeController::class)
  ->only(['store', 'update', 'destroy']);

 Route::resource('/fixedExpenses', FixedExpensesController::class)
  ->only(['store', 'update', 'destroy']);
Route::resource('/futureFixedExpenses', FutureFixedExpensesController::class)
  ->only(['store', 'update', 'destroy']);
Route::resource('/actualFixedExpenses', ActualFixedExpensesController::class)
  ->only(['store', 'update', 'destroy']);

Route::resource('/variableExpenses', VariableExpensesController::class)
  ->only(['store', 'update', 'destroy']);
Route::resource('/futureVariableExpenses', FutureVariableExpensesController::class)
  ->only(['store', 'update', 'destroy']);
