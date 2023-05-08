<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\LuggageController;
use App\Http\Controllers\TicketController;
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
Route::post("/register",[AuthController::class, "store"])
    ->name("register.store");

Route::get('/login',[AuthController::class,"login"])
    ->name("auth.login");

Route::post("/authenticate",[AuthController::class,"authenticate"])
    ->name("auth.authenticate");

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

Route::get('/tickets',[TicketController::class, "index"])
    ->name("tickets.index");

Route::get('/tickets/{id}',[TicketController::class, "show"])
    ->whereNumber("id")
    ->name("tickets.show");

Route::post('/tickets',[TicketController::class, "store"])
    ->name("tickets.store");

Route::put('/tickets/{id}',[TicketController::class, "update"])
    ->whereNumber("id")  
    ->name("tickets.update");

Route::delete('/tickets/{id}',[TicketController::class, "destroy"])
    ->whereNumber("id")
    ->name("tickets.destroy");

Route::get('/luggages',[LuggageController::class, "index"])
    ->name("luggages.index");

    Route::get('/luggages/{id}',[LuggageController::class, "show"])
    ->whereNumber("id")
    ->name("luggages.show");

Route::post('/luggages',[LuggageController::class, "store"])
    ->name("luggages.store");

Route::put('/luggages/{id}',[LuggageController::class, "update"])
    ->whereNumber("id")  
    ->name("luggages.update");

Route::delete('/luggages/{id}',[LuggageController::class, "destroy"])
    ->whereNumber("id")
    ->name("luggages.destroy");