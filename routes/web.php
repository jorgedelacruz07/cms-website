<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
  return view('auth.login');
});

Auth::routes();

// Website
Route::get('/website', 'WebsitesController@index')->middleware('auth');
Route::post('/website/create', 'WebsitesController@store');
Route::get('/website/{websiteID}', ['uses' => 'WebsitesController@show']);

// Page
Route::get('/website/{websiteID}/page', 'PagesController@index')->middleware('auth');
Route::post('/website/{websiteID}/page/', 'PagesController@store');

// Text
Route::post('/{websiteID}/{pageID}/text/create', 'TextsController@store');
Route::post('/{websiteID}/{pageID}/text/{elementID}/update', 'TextsController@update');


// Image
Route::post('/{websiteID}/{pageID}//image/create', 'ImagesController@store');
Route::post('/{websiteID}/{pageID}//image/{elementID}/update', 'ImagesController@update');


Route::group(['prefix' => 'json'], function () {
  Route::get('/website/{websiteID}', 'JsonController@website_json');
  Route::get('/page/{pageID}', 'JsonController@page_json');
});

Route::get('/get_json', 'JsonController@page_url');
