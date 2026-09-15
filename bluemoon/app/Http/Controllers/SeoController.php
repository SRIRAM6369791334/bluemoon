<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\SeoData;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeoController extends Controller
{
  public function seodetails($slug){
    $cleanSlug = Str::slug($slug);
    $name = str_replace('-', '', $slug);
    $seodetails = SeoData::where('url', $slug)
      ->orWhere('url', $cleanSlug)
      ->orWhere('url', 'LIKE', $name)
      ->firstOrFail();
    return view('pages.seodetails', compact('seodetails'));
  }

  public function blogdetails($slug){
    $cleanSlug = Str::slug($slug);
    $name = str_replace('-', '', $slug);
    $blogdetails = Blog::where('url', $slug)
      ->orWhere('url', $cleanSlug)
      ->orWhere('url', 'LIKE', $name)
      ->firstOrFail();
    return view('pages.blogdetails', compact('blogdetails'));
  }
}
