<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    protected $table = 'organizers';
    protected $fillable= [
        'fname'	,
        'lname',
        'email',
        'password',
        'phone',
        'image',
        'facebock',
        'twitter',
        'instagram',
        'google'
    ];
}
