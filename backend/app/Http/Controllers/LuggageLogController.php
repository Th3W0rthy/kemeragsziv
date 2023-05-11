<?php

namespace App\Http\Controllers;

use App\Http\Requests\LuggageLogRequest;
use App\Http\Resources\LuggageLogResource;
use App\Models\LuggageLog;
use Illuminate\Http\Request;

class LuggageLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = LuggageLog::all();
        return LuggageLogResource::collection($logs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\LuggageLogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LuggageLogRequest $request)
    {
        $data = $request->validated();
        $newLog = LuggageLog::create($data);
        return new LuggageLogResource($newLog);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $log = LuggageLog::findOrFail($id);
        return new LuggageLogResource($log);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\LuggageLogRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LuggageLogRequest $request, $id)
    {
        $data = $request->validated();
        $log = LuggageLog::findOrFail($id);
        if ($log->update($data)) {
            return new LuggageLogResource($log);
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
        $log = LuggageLog::findOrFail($id);
        $log->delete();
    }
}
