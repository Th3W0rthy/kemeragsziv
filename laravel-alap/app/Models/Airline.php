<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $table = "airlines";
    protected $fillable = ['name','phone','email','website','iata','icao'];
    public $timestamps = false;

    public function aircraft()
    {
        return $this->belongsTo(Aircraft::class);
    }

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }
}
