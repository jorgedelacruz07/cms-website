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
    ;
  }

  public function create($websiteID, $pageID){
    $website = Website::find($websiteID);
    $page = Page::find($pageID);
    return view('images.create')
      ->with('website',$website)
      ->with('page',$page);
  }

  public function store(Request $request, $websiteID, $pageID){
    $element = new Element;
    $image = new Image;
    $element->page_id = $pageID;
    $element->title = $request->title;
    $result1 = $element->save();
    $image->element_id = $element->id;
    $image->name = $request->name;
    $image->photo = $request->photo;
    $image->url = $request->url;
    $result2 = $image->save();
    if($result1 && $result2){
      return view('elements.index')
        ->with('image', $image);
    }
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
