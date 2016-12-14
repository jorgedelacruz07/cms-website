<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
use App\Page;
use App\Element;
use App\Image;

class ImagesController extends Controller
{
  public function index($websiteID, $pageID){
    $images = Image::all();
    return view('images.index')
      ->with('images',$images);
  }

  public function create($websiteID, $pageID){
    $website = Website::find($websiteID);
    $page = Page::find($pageID);
    return view('images.create')
      ->with('website',$website)
      ->with('page',$page);
  }

  public function store(Request $request, $websiteID, $pageID){
    $images = Image::all();
    return view('images.index')
      ->with('images',$images);
  }

  public function show($id){
    $image = Image::find($id);
    return view('images.show')
      ->with('image',$image);
  }

  public function edit($id){
    ;
  }

  public function update(Request $request){
    ;
  }

  public function destroy($id){
    ;
  }

}
