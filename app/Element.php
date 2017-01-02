<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    function page(){
        return $this->belongsTo('App\Page', 'page_id');
    }

    function text(){
        return $this->hasOne('App\Text', 'element_id', 'element_id');
    }

    function image(){
        return $this->hasOne('App\Image', 'element_id', 'element_id');
    }

    protected $fillable = ['id', 'page_id', 'title', 'type'];

}
