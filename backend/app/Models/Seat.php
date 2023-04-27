<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = "seats";
    protected $fillable = ['aircraft_id','class_id','seat_row','seat_col'];
    public $timestamps = false;

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function classes()
    {
        return $this->hasMany(Classification::class);
    }

    public function aircrafts()
    {
        return $this->hasMany(Aircraft::class);
    }
}
