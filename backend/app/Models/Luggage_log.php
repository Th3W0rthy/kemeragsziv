<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Luggage_log extends Model
{
    protected $table = "luggages_logs";
    protected $fillable = ['luggage_id','airport_id','created_at','updated_at'];
    public $timestamps = false;

    public function luggages()
    {
        return $this->hasMany(Luggage::class);
    }

    public function airports()
    {
        return $this->hasMany(Luggage::class);
    }
}