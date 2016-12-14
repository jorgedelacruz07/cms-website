<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Website;
use App\Page;

class PagesController extends Controller
{
  public function index($websiteID){
    $pages = Page::all()->where('website_id',$websiteID);
    $website = Website::find($websiteID);
    return view('websites.show')
      ->with('pages',$pages)
      ->with('website',$website);
  }

  public function create($websiteID){
    $website = Website::find($websiteID);
    return view('pages.create')
      ->with('website',$website);
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
      return view('websites.show')
        ->with('pages',$pages)
        ->with('website',$website);
    }else {

    }
  }

  public function show($websiteID, $pageID){
    $website = Website::find($websiteID);
    $page = Page::find($pageID);
    return view('pages.show')
      ->with('website', $website)
      ->with('page', $page);
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
