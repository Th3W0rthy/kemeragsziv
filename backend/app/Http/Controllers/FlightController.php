<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlightRequest;
use App\Http\Resources\FlightResource;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::all();
        return FlightResource::collection($flights);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\FlightRequest;  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlightRequest $request)
    {
        $data = $request->validated();
        $newFlight = Flight::create($data);
        return new FlightResource($newFlight);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flight = Flight::findOrFail($id);
        return new FlightResource($flight);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\FlightRequest;  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FlightRequest $request, $id)
    {
        $data = $request->validated();
        $flight = Flight::findOrFail($id);
        if ($flight->update($data)) {
            return new FlightResource($flight);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::findOrFail($id);
        $flight->delete();
    }
}
