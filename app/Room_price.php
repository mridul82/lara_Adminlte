<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_price extends Model
{
     protected $fillable = [
        'room_type', 'room_price'
    ];

    

    public function typesRoom()
    {
        return $this->belongsTo('App\Room_price');
    }
}
