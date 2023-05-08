<?php

namespace App\Http\Controllers;

use App\Http\Requests\LuggageRequest;
use App\Http\Resources\LuggageResource;
use App\Models\Luggage;
use App\Models\Ticket;
use Illuminate\Http\Request;

class LuggageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $luggages = Luggage::all();
        return LuggageResource::collection($luggages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\LuggageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LuggageRequest $request)
    {
        $data = $request->validated();
        $newLuggage = Luggage::create($data);
        return new LuggageResource($newLuggage);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $luggage = Luggage::findOrFail($id);
        return new LuggageResource($luggage);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\LuggageRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LuggageRequest $request, $id)
    {
        $data = $request->validated();
        $luggage = Luggage::findOrFail($id);
        if ($luggage->update($data)) {
            return new LuggageResource($luggage);
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
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();
    }
}
