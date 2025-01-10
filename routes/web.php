<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\FinancesController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\FutureIncomeController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
  ->only(['store', 'update', 'destroy'])
  /*can remove middleware('auth')?*/
  ->middleware('auth');

Route::resource('/futureIncome', FutureIncomeController::class)
  ->only(['store', 'update', 'destroy'])
  /*can remove middleware('auth')?*/
  ->middleware('auth');
