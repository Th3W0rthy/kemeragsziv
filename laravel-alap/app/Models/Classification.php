<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $table = "classes";
    protected $fillable = ['class'];
    public $timestamps = false;

    public function aircrafts()
    {
        return $this->belongsToMany(Aircraft::class, "classes_aircrafts");
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
}