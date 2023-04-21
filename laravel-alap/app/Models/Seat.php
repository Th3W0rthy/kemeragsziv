<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = "seats";
    protected $fillable = ['aircraft_id','class_id','seat_row','seat_col'];
    public $timestamps = false;

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function class()
    {
        return $this->belongsTo(Classification::class);
    }

    public function aircraft()
    {
        return $this->belongsTo(Aircraft::class);
    }
}
