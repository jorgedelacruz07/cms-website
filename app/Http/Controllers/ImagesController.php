<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
use App\Page;
use App\Element;
use App\Image;
use Storage;
use File;

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
    $element->page_id = $pageID;
    $element->title = $request->title;
    $element->type = $request->type;
    $result1 = $element->save();
    $image = new Image;
    $image->element_id = $element->id;
    $image->name = $request->name;
    $file = $request->file('url');
    $extension = $file->getClientOriginalExtension();
    $filename = $file->getClientOriginalName();
    $filedestiny = 'images/upload/';
    $file->move($filedestiny, $filename);
    $image->url = "/".$filedestiny.$filename;
    $result2 = $image->save();
    $images = Image::all();
    if($result1 && $result2){
      $website = Website::find($websiteID);
      $pages = Page::all()->where('website_id',$websiteID);
      return redirect()->action('WebsitesController@show',
        ['website' => $website, 'pages' => $pages]
      );
    }
  }

  public function show($id){
    ;
  }

  public function edit($id){
    ;
  }

  public function update(Request $request, $websiteID, $pageID, $elementID){
    $image = Image::find($elementID);
    $image->name = $request->name;
    $file = $request->file('url');
    $extension = $file->getClientOriginalExtension();
    $filename = $file->getClientOriginalName();
    $filedestiny = 'images/upload/';
    $file->move($filedestiny, $filename);
    $image->url = "/".$filedestiny.$filename;
    $result1 = $image->save();
    if($result1){
      $website = Website::find($websiteID);
      $pages = Page::all()->where('website_id',$websiteID);
      return redirect()->action('WebsitesController@show',
        ['website' => $website, 'pages' => $pages]
      );
    }
  }

  public function destroy($id){
    ;
  }


}
