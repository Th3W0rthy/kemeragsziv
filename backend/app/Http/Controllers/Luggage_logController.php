<?php

namespace App\Http\Controllers;

use App\Http\Requests\Luggage_logRequest;
use App\Http\Resources\Luggage_logResource;
use App\Models\Luggage_log;
use Illuminate\Http\Request;

class Luggage_logController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = Luggage_log::all();
        return Luggage_logResource::collection($logs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Luggage_logRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Luggage_logRequest $request)
    {
        $data = $request->validated();
        $newLog = Luggage_log::create($data);
        return new Luggage_logResource($newLog);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $log = Luggage_log::findOrFail($id);
        return new Luggage_logResource($log);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Luggage_logRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Luggage_logRequest $request, $id)
    {
        $data = $request->validated();
        $log = Luggage_log::findOrFail($id);
        if ($log->update($data)) {
            return new Luggage_logResource($log);
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
        $log = Luggage_log::findOrFail($id);
        $log->delete();
    }
}
