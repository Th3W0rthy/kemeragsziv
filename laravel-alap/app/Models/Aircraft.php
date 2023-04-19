<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    protected $table = "aircrafts";
    protected $fillable = ['airline_id','manufacturer','model'];
    public $timestamps = false;

    public function airlines()
    {
        return $this->hasMany(Airline::class);
    }

    public function classes_aircrafts()
    {
        return $this->belongsTo(Class_aircraft::class);
    }

    public function seats()
    {
        return $this->belongsTo(Seat::class);
    }

    public function flights()
    {
        return $this->belongsTo(Flight::class);
    }
}
