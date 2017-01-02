<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    function element(){
        return $this->belongsTo('App\Element', 'element_id', 'element_id');
    }

    protected $fillable = ['element_id', 'title', 'content'];
}
