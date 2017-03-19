<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'user_id', 'cust_firstname', 'cust_lastname', 'cust_loc','cust_city', 'cust_no'
    ];

    // public function user()
    // {
    //     return $this->hasOne('App\User');
    // }
}
