<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public function category()
    {
    	return $this->belongsTo('App\Category','ID_Category','Product_ID');
    }

    public function order_details()
    {
    	return $this->hasMany('App\Order_Detail','ID_Product','OrderDetail_ID');
    }
}
