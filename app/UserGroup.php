<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = "usergroup";

    public function customer()
    {
    	return $this->hasMany('App\Customer','GroupID','Group_ID');
    }
}
