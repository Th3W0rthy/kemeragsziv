<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Luggage extends Model
{
    protected $table = "luggages";
    protected $fillable = ['ticket_id','tag','size','price'];
    public $timestamps = false;

    public function Luggages_logs()
    {
        return $this->hasMany(Luggage_log::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Luggage::class);
    }
}
