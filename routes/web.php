<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/accounts',[App\Http\Controllers\AccountsController::class, 'index'])
        ->name('accounts.index');


Route::get('/{account}/edit', [App\Http\Controllers\AccountsController::class, 'edit'])
        ->name('accounts.edit');

Route::put('accounts/{account}', [App\Http\Controllers\AccountsController::class, 'update'])
        ->name('accounts.update');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/accounts/dashboard',[App\Http\Controllers\AccountsController::class, 'dashboard'])
        ->name('accounts.dashboard');

Route::get('/accounts/credits',[App\Http\Controllers\AccountsController::class, 'credits'])
        ->name('accounts.credits');

Route::get('/accounts/debits',[App\Http\Controllers\AccountsController::class, 'debits'])
        ->name('accounts.debits');    
        
Route::get('/loans/dashboard',[App\Http\Controllers\LoansController::class, 'dashboard'])
        ->name('loans.dashboard');        

Route::get('/loans/payments',[App\Http\Controllers\LoansController::class, 'payments'])
        ->name('loans.payments');        