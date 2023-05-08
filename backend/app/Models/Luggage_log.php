<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Luggage_log extends Model
{
    protected $table = "luggages_logs";
    protected $fillable = ['luggage_id','airport_id','created_at','updated_at'];
    public $timestamps = false;

    public function luggage()
    {
        return $this->belongsTo(Luggage::class);
    }

    public function airport()
    {
        return $this->belongsTo(Airport::class);
    }
}