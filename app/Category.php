<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products(){
    	return $this->belongsToMany('App\Product');
    }
    public function maincategory(){
    	return $this->belongsTo('App\Maincategory');
    }
}
