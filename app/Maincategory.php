<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maincategory extends Model
{
    public function categories(){
    	return $this->belongsToMany('App\Category');
    }

    public function productstyles(){
    	return $this->belongsToMany('App\Productstyle');
    }
}
