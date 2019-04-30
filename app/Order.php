<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order_";

    public function customer()
    {
    	return $this->belongsTo('App\Customer','ID_Customer','Customer_ID');
    }
}
