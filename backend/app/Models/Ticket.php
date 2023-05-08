<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = "tickets";
    protected $fillable = ['user_id','flight_id','name', 'sex', 'birth', 'email', 'phone', 'billing_name','country','postcode','settlement','address','tax_number','price','seat_id'];
    public $timestamps = true;
    protected $casts = [
        "birth" => "datetime",
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }

    public function luggages()
    {
        return $this->hasMany(Luggage::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
}
