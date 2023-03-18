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
