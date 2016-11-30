<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    function element(){
        return $this->belongsTo('App\Element');
    }
}
