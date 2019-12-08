<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $casts = ['expiry_time' => 'date'];

    public function products(){
    	return $this->belongsToMany('App\Product');
    }
}


