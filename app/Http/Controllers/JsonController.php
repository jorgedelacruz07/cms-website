<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
use App\Page;
use App\Element;
use App\Text;
use App\Image;

class JsonController extends Controller
{

  public function website_json($websiteID){
    return Website::with('page')->find($websiteID);
  }

  public function page_json($pageID){
    return Page::with('element')->find($pageID);
  }

  public function page_url(){
    $json = json_decode(file_get_contents('https://world.openfoodfacts.org/api/v0/product/737628064502.json'), true);
    $product = $json["product"];
    return $product;
  }
}
