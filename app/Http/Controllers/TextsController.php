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
    $element->type = $request->type;
    $result1 = $element->save();
    $text->element_id = $element->id;
    $text->title = $request->title;
    $text->content = $request->content;
    $result2 = $text->save();
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
    $text = Text::find($elementID);
    $text->title = $request->title;
    $text->content = $request->content;
    $result1 = $text->save();
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
