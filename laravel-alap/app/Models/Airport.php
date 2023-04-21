<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = "airports";
    protected $fillable = ['name','iata','time_zone','phone','email','website','continent','country','settlement'];
    public $timestamps = false;

    public function luggages_logs()
    {
        return $this->hasMany(Luggage_log::class);
    }

    public function flights()
    {
        return $this->hasMany(Flight::class);
        return $this->hasMany(Flight::class);
    }
}