<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Styleoption extends Model
{
    public function productstyles(){
    	return $this->belongsToMany('App\Productstyle');
    }
}
