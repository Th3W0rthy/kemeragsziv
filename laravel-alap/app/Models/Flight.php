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
    

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function airports()
    {
        return $this->hasMany(Airport::class);
    }

    public function aircrafts()
    {
        return $this->hasMany(Aircraft::class);
    }

    public function airlines()
    {
        return $this->hasMany(Airline::class);
    }
}
