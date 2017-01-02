<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Website;
use App\Page;
use App\Element;
use App\Text;
use App\Image;

class ElementsController extends Controller
{
  public function index($websiteID, $pageID){
    $website = Website::find($websiteID);
    $page = Page::find($pageID);
    $elements = Element::all()->where('page_id',$pageID);
    return view('pages.show')
      ->with('website', $website)
      ->with('page', $page)
      ->with('elements', $elements);
  }

  public function create($websiteID, $pageID){

  }

  public function store(Request $request, $websiteID, $pageID){
    ;
  }

  public function show($websiteID, $pageID){
    ;
  }

  public function edit($websiteID, $pageID){
    ;
  }

  public function update(Request $request, $websiteID, $pageID){
    ;
  }

  public function destroy($id){
    ;
  }
}
