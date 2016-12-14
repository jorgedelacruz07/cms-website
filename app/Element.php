<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    function page(){
        return $this->belongsTo('App\Page', 'page_id');
    }

    function text(){
        return $this->hasMany('App\Text');
    }

    function image(){
        return $this->hasMany('App\Image');
    }

    protected $guarded = ['id', 'title'];
}
