<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    function user(){
        return $this->belongsTo('App\User');
    }

    function page(){
        return $this->hasMany('App\Page');
    }
}
