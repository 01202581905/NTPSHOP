<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    protected $table = "order_detail";

    public function product()
    {
    	return $this->belongsTo('App\Product','ID_Product','Product_ID');
    }
}
