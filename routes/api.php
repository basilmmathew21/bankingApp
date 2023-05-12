<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', [RegisterController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);

Route::middleware(['auth:web,sanctum'])->group(function() {    
    Route::get('account/add',[App\Http\Controllers\Api\ApiAccountController::class,'add']);
    Route::get('account/{id}/delete',[App\Http\Controllers\Api\ApiAccountController::class,'delete']);
    
    Route::get('user', function (Request $request) {
        return $request->user();
    });

    Route::get('logout', [AuthController::class, 'logout']);
});
