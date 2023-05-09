<?php

namespace App\Http\Controllers;

use App\Http\Requests\AirlineRequest;
use App\Http\Resources\AirlineResource;
use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airline = Airline::all();
        return AirlineResource::collection($airline);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AirlineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AirlineRequest $request)
    {
        $data = $request->validated();
        $newAirline = Airline::create($data);
        return new AirlineResource($newAirline);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $airline = Airline::findOrFail($id);
        return new AirlineResource($airline);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\AirlineRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AirlineRequest $request, $id)
    {
        $data = $request->validated();
        $airline = Airline::findOrFail($id);
        if ($airline->update($data)) {
            return new AirlineResource($airline);
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
        $airline = Airline::findOrFail($id);
        $airline->delete();
    }
}
