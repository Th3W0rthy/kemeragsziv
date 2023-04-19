<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Class_aircraft extends Model
{
    protected $table = "classes_aircrafts";
    protected $fillable = ['class_id','aircraft_id',];
    public $timestamps = false;

    public function aircrafts()
    {
        return $this->belongsToMany(Aircraft::class);
    }

    public function classes()
    {
        return $this->belongsToMany(Classification::class);
    }
}
