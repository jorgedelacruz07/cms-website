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
    $elements = Website::with('page')->find($websiteID);

    return $elements;
  }

  public function page_json($pageID){
    $elements = Page::with('element')->find($pageID);
    // $elements = Element::with('text','image')->find($page->id);
    // return $elements;

    // $page = Page::find($pageID);
    // $elements = $page->join('elements','pages.id','=','elements.page_id')
    //                 ->join('texts','elements.id','=','texts.element_id')
    //                 ->join('images','elements.id','=','images.element_id')
    //                 ->where('pages.id','=',$pageID)
    //                 ->select('elements.title','elements.type','texts.title','texts.content','images.name','images.url')
    //                 ->get();

    // $elements = Page::with('element')
    //               ->join('elements','pages.id','=','elements.page_id')
    //               ->join('texts','elements.id','=','texts.element_id')
    //               ->join('images','elements.id','=','images.element_id')
    //               ->where('pages.id','=',$pageID)
    //               ->select('elements.title','elements.type','texts.title','texts.content','images.name','images.url')
    //               ->get();
    
    return $elements;
  }

  public function element_json($elementID){
    $element = Element::where('id',$elementID)->first();
    if($element->type == "text"){
      $text = $element->text;
      return $text;
    }elseif ($element->type == "image") {
      $image = $element->image;
      return $image;
    }
  }

  public function page_url(){
    $json = json_decode(file_get_contents('https://world.openfoodfacts.org/api/v0/product/737628064502.json'), true);
    $product = $json["product"];
    return $product;
  }
}
