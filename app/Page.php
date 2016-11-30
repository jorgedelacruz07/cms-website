<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    function website(){
        return $this->belongsTo('App\Website');
    }

    function element(){
        return $this->hasMany('App\Element');
    }
}
