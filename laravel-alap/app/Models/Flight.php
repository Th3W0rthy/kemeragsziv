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
    

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function aircraft()
    {
        return $this->belongsTo(Aircraft::class);
    }

    public function airport()
    {
        return $this->belongsTo(Airport::class);
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }
}
