<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_no', 'room_type', 'room_price', 'room_status'
    ];

    
    
}
