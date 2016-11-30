<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    function page(){
        return $this->belongsTo('App\Page');
    }

    function text(){
        return $this->hasMany('App\Text');
    }

    function image(){
        return $this->hasMany('App\Image');
    }
}
