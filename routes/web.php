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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Website
Route::get('/website', 'WebsitesController@index')->middleware('auth');
Route::get('/website/create', 'WebsitesController@create');
Route::post('/website', 'WebsitesController@store');
Route::get('/website/{websiteID}', ['uses' => 'WebsitesController@show']);
Route::get('/website/edit/{websiteID}', ['uses' => 'WebsitesController@edit']);
Route::post('/website/{websiteID}', ['uses' => 'WebsitesController@update']);
Route::get('/website/destroy/{websiteID}', ['uses' => 'WebsitesController@destroy']);

// Page
Route::get('/website/{websiteID}/page', 'PagesController@index')->middleware('auth');
Route::get('/website/{websiteID}/page/create', 'PagesController@create');
Route::post('/website/{websiteID}/page', 'PagesController@store');
Route::get('/website/{websiteID}/page/{pageID}', ['uses' => 'PagesController@show']);
Route::get('/website/{websiteID}/page/edit/{pageID}', ['uses' => 'PagesController@edit']);
Route::post('/website/{websiteID}/page/{pageID}', ['uses' => 'PagesController@update']);
Route::get('/website/{websiteID}/page/destroy/{pageID}', ['uses' => 'PagesController@destroy']);

// Element
Route::get('/website/{websiteID}/page/{pageID}/element', 'ElementsController@index')->middleware('auth');
// Route::get('/website/{websiteID}/page/{pageID}/element/create', 'ElementsController@create');
// Route::post('/website/{websiteID}/page/{pageID}/element', 'ElementsController@store');
// Route::get('/website/{websiteID}/page/{pageID}/element/{elementID}', ['uses' => 'ElementsController@show']);
// Route::get('/website/{websiteID}/page/{pageID}/element/edit/{pageID}', ['uses' => 'ElementsController@edit']);
// Route::post('/website/{websiteID}/page/{pageID}/element/{elementID}', ['uses' => 'ElementsController@update']);
// Route::get('/website/{websiteID}/page/{pageID}/element/destroy/{elementID}', ['uses' => 'ElementsController@destroy']);


// Text
Route::get('/website/{websiteID}/page/{pageID}/element/text/create', 'TextsController@create');
Route::post('/website/{websiteID}/page/{pageID}/element/text', 'TextsController@store');


// Image
Route::get('/website/{websiteID}/page/{pageID}/element/image/create', 'ImagesController@create');
Route::post('/website/{websiteID}/page/{pageID}/element/image', 'ImagesController@store');
