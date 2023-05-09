<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    protected $table = "aircrafts";
    protected $fillable = ['airline_id','manufacturer','model'];
    public $timestamps = false;

    public function classes()
    {
        return $this->belongsToMany(Classification::class, "classes_aircrafts");
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }
}
