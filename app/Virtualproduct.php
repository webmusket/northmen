<?php

namespace App;

use Cartalyst\Tags\TaggableTrait;
use Cartalyst\Tags\TaggableInterface;
use Illuminate\Database\Eloquent\Model;

class Virtualproduct extends Model implements TaggableInterface
{
	use TaggableTrait;

    protected $casts = [
        'product_additional' => 'array',
        'category' => 'array'
    ];
}
