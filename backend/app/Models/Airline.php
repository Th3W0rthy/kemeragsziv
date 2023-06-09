<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $table = "airlines";
    protected $fillable = ['name','phone','email','website','iata','icao'];
    public $timestamps = false;

    public function aircrafts()
    {
        return $this->hasMany(Aircraft::class);
    }

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
