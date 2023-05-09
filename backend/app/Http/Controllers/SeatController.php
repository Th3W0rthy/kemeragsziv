<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeatRequest;
use App\Http\Resources\SeatResource;
use App\Models\Seat;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats = Seat::all();
        return SeatResource::collection($seats);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\SeatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeatRequest $request)
    {
        $data = $request->validated();
        $newSeat = Seat::create($data);
        return new SeatResource($newSeat);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seat = Seat::findOrFail($id);
        return new SeatResource($seat);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\SeatRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SeatRequest $request, $id)
    {
        $data = $request->validated();
        $seat = Seat::findOrFail($id);
        if ($seat->update($data)) {
            return new SeatResource($seat);
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
        $seat = Seat::findOrFail($id);
        $seat->delete();
    }
}
