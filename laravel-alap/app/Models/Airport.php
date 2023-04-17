<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $table = "airports";
    public $timestamps = false;

    public function luggages_logs()
    {
        return $this->belongsTo();
    }

    public function flights()
    {
        return $this->belongsTo();
        return $this->belongsTo();
    }
}
