<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'from',
        'to',
        'all_ticket',
        'available_ticket',
        'hall_id',
        'organizer_id'
    ];
    public function Halls()
    {
        return $this->belongsTo('App\models\Hall','hall_id');
    }
    public function Organizers()
    {
        return $this->belongsTo('App\models\Organizer','organizer_id');
    }

}
