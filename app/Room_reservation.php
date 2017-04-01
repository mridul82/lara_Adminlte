<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_reservation extends Model
{
    protected $fillable = [
        'room_id', 'customer_id', 'extra', 'days', 'check_in', 'check_out'
    ];
}
