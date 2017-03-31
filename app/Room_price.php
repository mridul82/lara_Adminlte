<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_price extends Model
{
     protected $fillable = [
        'room_type', 'room_price'
    ];
}
