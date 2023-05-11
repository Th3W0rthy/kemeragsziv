<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LuggageLog extends Model
{
    protected $table = "luggages_logs";
    protected $fillable = ['luggage_id','airport_id'];
    public $timestamps = true;

    public function luggage()
    {
        return $this->belongsTo(Luggage::class);
    }

    public function airport()
    {
        return $this->belongsTo(Airport::class);
    }
}