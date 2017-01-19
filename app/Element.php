<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    function page(){
        return $this->belongsTo('App\Page', 'page_id', 'id');
    }

    function text(){
        return $this->hasOne('App\Text');
    }

    function image(){
        return $this->hasOne('App\Image');
    }

    protected $fillable = ['id', 'page_id', 'title', 'type'];

}
