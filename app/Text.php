<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    function element(){
        return $this->belongsTo('App\Element');
    }
}