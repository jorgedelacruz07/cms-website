<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
use App\Page;
use App\Element;
use App\Image;

use App\Http\Requests;
use Input;

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
    $element->type = $request->type;
    $result1 = $element->save();
    $image->element_id = $element->id;
    $image->name = $request->name;

    // $image_name = $request->file('url')->getClientOriginalName();
		// $image_extension = $request->file('url')->getClientOriginalExtension();
		// $image_new_name = md5(microtime(true));
		// $temp_file = base_path().'/public/images/upload/'.strtolower($image_new_name.'_temp.'.$image_extension);
		// $request->file('url')
    //   ->move(base_path().'/public/images/upload/', strtolower($image_new_name.'_temp.'.$image_extension));
    // $image->url = $image_name;

    // $destinationPath = '';
    // $filename = '';
    // if(Input::hasFile('url')){
    //   $file = Input::file('url');
    //   $destinationPath = public_path().'/images/';
    //   $filename = time().'_'.$file->getClientOriginalName();
    //   $filename = str_replace('','_'.$filename);
    //   $uploadSuccess = $file->move($destinationPath,$filename);
    // }
    // $image->url = $filename;

    $image->url = "";
    $result2 = $image->save();
    if($result1 && $result2){
      $website = Website::find($websiteID);
      $page = Page::find($pageID);
      $elements = Element::all()->where('page_id',$pageID);
      return view('pages.show')
        ->with('website',$website)
        ->with('page',$page)
        ->with('elements',$elements);
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
