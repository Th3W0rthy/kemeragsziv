<?php

namespace App\Http\Controllers;

use App\Http\Requests\AirportRequest;
use App\Http\Resources\AirportResource;
use App\Models\Airport;
use Illuminate\Http\Request;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airports = Airport::all();
        return AirportResource::collection($airports);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AirportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AirportRequest $request)
    {
        $data = $request->validated();
        $newAirport = Airport::create($data);
        return new AirportResource($newAirport);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $airport = Airport::findOrFail($id);
        return new Airport($airport);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\AirportRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AirportRequest $request, $id)
    {
        $data = $request->validated();
        $airport = Airport::findOrFail($id);
        if ($airport->update($data)) {
            return new AirportResource($airport);
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
        $airport = Airport::findOrFail($id);
        $airport->delete;
    }
}
