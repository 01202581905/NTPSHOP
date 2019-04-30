<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blog_detail";

    public function type()
    {
    	return $this->belongsTo('App\BlogType','Type_Blog','blogtype_ID');
    }
}
