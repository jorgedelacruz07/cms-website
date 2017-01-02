<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    function element(){
        return $this->belongsTo('App\Element', 'element_id', 'element_id');
    }

    protected $fillable = ['element_id', 'name', 'url'];
}
