<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\FinancesController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\FutureIncomeController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'create'])
  ->name('login');
Route::post('login', [AuthController::class, 'store'])
  ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
  ->name('logout');

Route::resource('user-account', UserAccountController::class)
  ->only(['create', 'store']);
  
Route::get('/', [FinancesController::class, 'allFinancesData'])
  ->name('home');

Route::resource('/income', IncomeController::class)
  ->only(['store', 'update', 'destroy']);

Route::resource('/futureincome', FutureIncomeController::class)
  ->only(['store', 'update', 'destroy']);

/*

Route::post('/income', [IncomeController::class, 'store']);
Route::put('/income/{id}', [IncomeController::class, 'update']);
Route::delete('/income/{id}', [IncomeController::class, 'destroy']);

create - post /income
update - put /income/{id})
delete - delete /income/{id}
*/