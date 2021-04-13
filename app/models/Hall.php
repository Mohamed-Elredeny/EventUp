<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $table ='halls';
    protected $forign_key = 'hall_id';
    protected $fillable =[
        'title',
        'description',
        'image',
        'address',
        'price_per_hour'
    ];
}
