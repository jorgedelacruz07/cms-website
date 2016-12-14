<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
use App\Page;
use App\Element;
use App\Text;

class TextsController extends Controller
{
  public function index($websiteID, $pageID){
    ;
  }

  public function create($websiteID, $pageID){
    $website = Website::find($websiteID);
    $page = Page::find($pageID);
    return view('texts.create')
      ->with('website',$website)
      ->with('page',$page);
  }

  public function store(Request $request, $websiteID, $pageID){
    $element = new Element;
    $text = new Text;
    $element->page_id = $pageID;
    $element->title = $request->name;
    $result1 = $element->save();
    $text->element_id = $element->id;
    $text->title = $request->title;
    $text->content = $request->content;
    $result2 = $text->save();
    if($result1 && $result2){
      return view('elements.index');
    }
  }

  public function show($id){
    ;
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
