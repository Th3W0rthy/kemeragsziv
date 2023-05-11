<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = "airports";
    protected $fillable = ['name','iata','time_zone','phone','email','website','continent','country','settlement'];
    public $timestamps = false;

    public function luggage_logs()
    {
        return $this->hasMany(LuggageLog::class);
    }

    public function departureFlight()
    {
        return $this->belongsTo(Flight::class, "departure_airport", "id");
    }

    public function arrivalFlight()
    {
        return $this->belongsTo(Flight::class, "arrival_airport", "id");
    }
}