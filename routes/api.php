<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/flights/enter', [App\Http\Controllers\EnterFlightController::class, 'enter']);
Route::get('/user/route}', [App\Http\Controllers\UserRouteController::class, 'get']);
