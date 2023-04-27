<?php

use App\Http\Controllers\FlightController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/flights',[FlightController::class, "index"])
    ->name("flights.index");

Route::get('/flights/{id}',[FlightController::class, "show"])
    ->whereNumber("id")
    ->name("flights.show");

Route::post('/flights',[FlightController::class, "store"])
    ->name("flights.store");

Route::put('/flights/{id}',[FlightController::class, "update"])
    ->whereNumber("id")  
    ->name("flights.update");

Route::delete('/flights/{id}',[FlightController::class, "destroy"])
    ->whereNumber("id")
    ->name("flights.destroy");