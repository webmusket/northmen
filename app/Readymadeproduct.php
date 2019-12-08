<?php

namespace App;

use Cartalyst\Tags\TaggableTrait;
use Cartalyst\Tags\TaggableInterface;
use Illuminate\Database\Eloquent\Model;

class Readymadeproduct extends Model implements TaggableInterface
{
	use TaggableTrait;

    protected $casts = [
        'product_additional' => 'array',
        'category' => 'array',
        'publish_at' => 'datetime'
    ];



    //const CATEGORY = 'category';

    
    



    

    // $user =  Readymadeproduct::find($id);

    // $user->category = explode(',', $user->category);

    // $user->save();

    //protected $category = explode(',', ['category']);
    // protected $category;

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model){
    //         $model->category = explode(',', ['category']);
    //     });
    // } 

 //    $user = Readymadeproduct::firstOrNew(array('name' => Input::get('name')));
	// $user->foo = Input::get('foo');
	// $user->save();

    


}
