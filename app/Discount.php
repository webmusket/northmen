<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $casts = [
    	'expiry_time' => 'date',
    	'category' => 'array'
    ];

    public function category(){
    	return $this->belongsToMany('App\Category');
    }

    public function readymadeproduct(){
    	return $this->belongsToMany('App\Readymadeproduct');
    }

    public function virtualproduct(){
    	return $this->belongsToMany('App\Virtualproduct');
    }
}
