<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Website;
use App\Page;
use App\Element;

class ElementsController extends Controller
{
  public function index($websiteID, $pageID){
    $website = Website::find($websiteID);
    $page = Page::find($pageID);
    return view('pages.show')
      ->with('website',$website)
      ->with('page',$page);
  }

  public function create($websiteID, $pageID){
    $website = Website::find($websiteID);
    $page = Page::find($pageID);
    return view('elements.create')
      ->with('website',$website)
      ->with('page',$page);
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
