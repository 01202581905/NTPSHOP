<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "users";

    public function order()
    {
    	return $this->hasMany('App\Order','ID_Customer','Customer_ID');
    }

    public function usergroup()
    {
    	return $this->belongsTo('App\Product','GroupID','Group_ID');
    }
}
