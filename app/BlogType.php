<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogType extends Model
{
    protected $table = "blog_type";

    public function products()
    {
    	return $this->hasMany('App\Blog','Type_Blog','blogtype_ID');
    }
}
