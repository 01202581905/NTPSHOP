<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "product_category";

    public function products()
    {
    	return $this->hasMany('App\Product','ID_Category','Category_ID');
    }
}
