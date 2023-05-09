<?php

use App\Http\Controllers\AircraftController;
use App\Http\Controllers\AirlineController;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\Luggage_logController;
use App\Http\Controllers\LuggageController;
use App\Http\Controllers\SeatController;
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

//Flight

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

//Ticket

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

//Luggage

Route::get('/luggages',[LuggageController::class, "index"])
    ->name("luggages.index");

Route::get('/luggages/{id}',[LuggageController::class, "show"])
    ->whereNumber("id")
    ->name("luggages.show");

Route::put('/luggages',[LuggageController::class, "store"])
    ->name("luggages.store");

Route::put('/luggages/{id}',[LuggageController::class, "update"])
    ->whereNumber("id")  
    ->name("luggages.update");

Route::delete('/luggages/{id}',[LuggageController::class, "destroy"])
    ->whereNumber("id")
    ->name("luggages.destroy");

//Luggage log

Route::get('/logs',[Luggage_logController::class, "index"])
    ->name("logs.index");

Route::get('/logs/{id}',[Luggage_logController::class, "show"])
    ->whereNumber("id")
    ->name("logs.show");

Route::put('/logs',[Luggage_logController::class, "store"])
    ->name("logs.store");

Route::put('/logs/{id}',[Luggage_logController::class, "update"])
    ->whereNumber("id")  
    ->name("logs.update");

Route::delete('/logs/{id}',[Luggage_logController::class, "destroy"])
    ->whereNumber("id")
    ->name("logs.destroy");

//Airport

Route::get('/airports',[AirportController::class, "index"])
    ->name("airports.index");

Route::get('/airports/{id}',[AirportController::class, "show"])
    ->whereNumber("id")
    ->name("airports.show");

Route::put('/airports',[AirportController::class, "store"])
    ->name("airports.store");

Route::put('/airports/{id}',[AirportController::class, "update"])
    ->whereNumber("id")  
    ->name("airports.update");

Route::delete('/airports/{id}',[AirportController::class, "destroy"])
    ->whereNumber("id")
    ->name("airports.destroy");

//Airline

Route::get('/airlines',[AirlineController::class, "index"])
    ->name("airlines.index");

Route::get('/airlines/{id}',[AirlineController::class, "show"])
    ->whereNumber("id")
    ->name("airlines.show");

Route::put('/airlines',[AirlineController::class, "store"])
    ->name("airlines.store");

Route::put('/airlines/{id}',[AirlineController::class, "update"])
    ->whereNumber("id")  
    ->name("airlines.update");

Route::delete('/airlines/{id}',[AirlineController::class, "destroy"])
    ->whereNumber("id")
    ->name("airlines.destroy");

//Aircraft

Route::get('/aircrafts',[AircraftController::class, "index"])
    ->name("aircrafts.index");

Route::get('/aircrafts/{id}',[AircraftController::class, "show"])
    ->whereNumber("id")
    ->name("aircrafts.show");

Route::put('/aircrafts',[AircraftController::class, "store"])
    ->name("aircrafts.store");

Route::put('/aircrafts/{id}',[AircraftController::class, "update"])
    ->whereNumber("id")  
    ->name("aircrafts.update");

Route::delete('/aircrafts/{id}',[AircraftController::class, "destroy"])
    ->whereNumber("id")
    ->name("aircrafts.destroy");

//Seat

Route::get('/seats',[SeatController::class, "index"])
    ->name("seats.index");

Route::get('/seats/{id}',[SeatController::class, "show"])
    ->whereNumber("id")
    ->name("seats.show");

Route::put('/seats',[SeatController::class, "store"])
    ->name("seats.store");

Route::put('/seats/{id}',[SeatController::class, "update"])
    ->whereNumber("id")  
    ->name("seats.update");

Route::delete('/seats/{id}',[SeatController::class, "destroy"])
    ->whereNumber("id")
    ->name("seats.destroy");

//Class

Route::get('/classes',[ClassController::class, "index"])
    ->name("classes.index");

Route::get('/classes/{id}',[ClassController::class, "show"])
    ->whereNumber("id")
    ->name("classes.show");

Route::put('/classes',[ClassController::class, "store"])
    ->name("classes.store");

Route::put('/classes/{id}',[ClassController::class, "update"])
    ->whereNumber("id")  
    ->name("classes.update");

Route::delete('/classes/{id}',[ClassController::class, "destroy"])
    ->whereNumber("id")
    ->name("classes.destroy");