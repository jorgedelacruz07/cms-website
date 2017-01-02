<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    function website(){
        return $this->belongsTo('App\Website', 'id', 'website_id');
    }

    function element(){
        return $this->hasMany('App\Element', 'page_id', 'id');
    }

    protected $fillable = ['id', 'website_id', 'name', 'url', 'json'];
}
