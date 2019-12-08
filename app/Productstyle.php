<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productstyle extends Model
{
    public function maincategories(){
    	return $this->belongsToMany('App\Maincategory');
    }

    public function styleoptions(){
    	return $this->belongsToMany('App\Styleoption');
    }
}
