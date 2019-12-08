<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'product_inventory' => 'array',
        'product_additional' => 'array'
    ];
    public function category(){
    	return $this->belongsTo('App\Category');
    }
    public function productinformations(){
    	return $this->belongsToMany('App\Productinformation');
    }


}
