<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;
use App\Website;
use App\Page;
use App\Element;
use App\Text;
use App\Image;

class WebsitesController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $user_id = Auth::id();
    $websites = Website::all()->where('user_id',$user_id);
    $num_websites = 1;
    return view('websites.index')
      ->with('num_websites', $num_websites)
      ->with('websites',$websites);
  }

  public function store(Request $request){
    $website = new Website;
    $user = Auth::user();
    $website->user_id = $user->id;
    $website->name = $request->name;
    $website->url = $request->url;
    $result = $website->save();
    if($result){
      $websites = Website::all()->where('user_id',$user->id);
      return redirect()->action('WebsitesController@index',
        ['websites' => $websites]
      );
    }
  }

  public function show($websiteID){
    $pages = Page::all()->where('website_id',$websiteID);
    $num_pages = $pages->count();
    $website = Website::find($websiteID);
    return view('websites.show')
      ->with('num_pages', $num_pages)
      ->with('pages',$pages)
      ->with('website',$website);
  }

  public function edit($websiteID){
    ;
  }

  public function update(Request $request){
    ;
  }

  public function destroy($websiteID){
    ;
  }

}
