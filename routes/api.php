<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/cart', [CartsController::class, 'show']);
Route::post('/cart', [CartsController::class, 'store']);
Route::delete('/cart', [CartsController::class, 'store']);

Route::post('/order', [OrderController::class, 'store']);
