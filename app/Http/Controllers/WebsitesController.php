<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Website;
use App\Page;

class WebsitesController extends Controller
{
  public function index(){
    $user_id = Auth::id();
    $websites = Website::all()->where('user_id',$user_id);
    return view('websites.index')
      ->with('websites',$websites);
  }

  public function create(){
    return view('websites.create');
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
      return view('websites.index')
        ->with('websites',$websites);
    }
  }

  public function show($websiteID){
    $pages = Page::all()->where('website_id',$websiteID);
    $website = Website::find($websiteID);
    return view('websites.show')
      ->with('pages',$pages)
      ->with('website',$website);

    // $user_id = Auth::id();
    // $pages = DB::table('pages')
    //             ->join('websites', 'pages.website_id', '=', 'websites.id')
    //             ->join('users', 'websites.user_id', '=', 'users.id')
    //             ->where('pages.website_id','=',$websiteID)
    //             ->where('user_id','=',$user_id)
    //             ->get();
    // $website = Website::find($websiteID);
    // return view('websites.show')
    //   ->with('pages', $pages)
    //   ->with('website',$website);
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
