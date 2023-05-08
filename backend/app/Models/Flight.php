<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = "flights";
    protected $fillable = ['number','departure','arrival','departure_airport','arrival_airport','airline_id','aircraft_id','cost','basic_price','ground_handler'];
    protected $casts = [
        "departure" => "datetime",
        "arrival" => "datetime",
    ];
    public $timestamps = false;
    
    public function duration()
    {
        return $this->departure->diff($this->arrival);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function departureAirport()
    {
        return $this->hasOne(Airport::class,"id","departure_airport");
    }

    public function arrivalAirport()
    {
        return $this->hasOne(Airport::class,"id","arrival_airport");
    }

    public function aircraft()
    {
        return $this->hasOne(Aircraft::class, "id");
    }

    public function airline()
    {
        return $this->hasOne(Airline::class, "id");
    }
}
