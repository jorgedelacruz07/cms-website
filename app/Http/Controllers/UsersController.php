<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
    $this->middleware('log')->only('index');
    $this->middleware('subscribed')->except('store');
  }
}
