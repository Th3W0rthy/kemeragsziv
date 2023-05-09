<?php

namespace App\Http\Controllers;

use App\Http\Requests\AircraftRequest;
use App\Http\Resources\AircraftResource;
use App\Models\Aircraft;
use Illuminate\Http\Request;

class AircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aircrafts = Aircraft::all();
        return AircraftResource::collection($aircrafts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AircraftRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AircraftRequest $request)
    {
        $data = $request->validated();
        $newAircraft = Aircraft::create($data);
        return new AircraftResource($newAircraft);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aircraft = Aircraft::findOrFail($id);
        return new AircraftResource($aircraft);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\AircraftRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AircraftRequest $request, $id)
    {
        $data = $request->validated();
        $aircraft = Aircraft::findOrFail($id);
        if ($aircraft->update($data)) {
            return new AircraftResource($aircraft);
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
        $aircraft = Aircraft::findOrFail($id);
        $aircraft->delete();
    }
}
