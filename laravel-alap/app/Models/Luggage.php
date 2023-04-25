<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Luggage extends Model
{
    protected $table = "luggages";
    protected $fillable = ['ticket_id','tag','size','price'];
    public $timestamps = false;

    public function luggage_log()
    {
        return $this->belongsTo(Luggage_log::class);
    }

    public function tickets()
    {
        return $this->hasMany(Luggage::class);
    }
}
