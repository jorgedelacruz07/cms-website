<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Website;
use App\Page;
use App\Element;
use App\Text;
use App\Image;

class PagesController extends Controller
{
  public function index($websiteID){
    ;
  }

  public function store(Request $request, $websiteID){
    $page = new Page;
    $page->website_id = $websiteID;
    $page->name = $request->name;
    $page->url = $request->url;
    $page->json = $request->json;
    $result = $page->save();
    if($result){
      $website = Website::find($websiteID);
      $pages = Page::all()->where('website_id',$websiteID);
      return redirect()->action('WebsitesController@show',
        ['website' => $website, 'pages' => $pages]
      );
    }
  }

  public function show($websiteID, $pageID){
    ;
  }

  public function edit($websiteID){
    ;
  }

  public function update(Request $request, $websiteID){
    ;
  }

  public function destroy($websiteID){
    ;
  }
}
