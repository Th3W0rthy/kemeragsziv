<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Luggage extends Model
{
    protected $table = "luggages";
    protected $fillable = ['ticket_id','tag','size', 'desc','price'];
    public $timestamps = false;

    public function luggage_logs()
    {
        return $this->hasMany(LuggageLog::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function tag()
    {
        return 
            $this->ticket->flight->number . "." . 
            $this->ticket->flight->id . "." . 
            $this->ticket->flight->airline->iata . "." . 
            $this->ticket->user->id . "." . 
            $this->id;
    }
}
