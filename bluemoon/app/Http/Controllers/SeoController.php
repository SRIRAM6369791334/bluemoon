<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\SeoData;
use Illuminate\Http\Request;

class SeoController extends Controller
{
  public function seodetails($slug){

    $name = str_replace('-','',$slug);
    $seodetails = SeoData::where('url','LIKE',$name)->FirstOrFail();
    return view('pages.seodetails',compact('seodetails'));
  }

  public function blogdetails($slug){
    $name = str_replace('-','', $slug);
    $blogdetails = Blog::where('url', 'LIKE', $name)->FirstOrFail();
    return view('pages.blogdetails', compact('blogdetails'));
  }
}
