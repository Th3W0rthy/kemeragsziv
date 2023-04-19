<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $table = "classes";
    protected $fillable = ['class'];
    public $timestamps = false;

    public function seats()
    {
        return $this->belongsTo(Seat::class);
    }

    public function classes_aircrafts()
    {
        return $this->belongsToMany(Class_aircraft::class);
    }
}