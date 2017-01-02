<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    function user(){
        return $this->belongsTo('App\User', 'id', 'user_id');
    }

    function page(){
        return $this->hasMany('App\Page', 'website_id', 'id');
    }

    protected $fillable = ['id', 'user_id', 'name', 'url'];
}
