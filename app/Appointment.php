<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable=[
    'id',
    'name',
        'number',
        'tnumber',
    'email',
    'gender',
    'payment',
    'message'
];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
