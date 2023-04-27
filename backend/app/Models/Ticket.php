<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = "tickets";
    protected $fillable = ['user_id','flight_id','name', 'sex', 'birth', 'email', 'phone', 'billing_name','country','postcode','settlement','address','tax_number','price','seat_id'];
    public $timestamps = true;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }

    public function luggage()
    {
        return $this->belongsTo(Luggage::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
