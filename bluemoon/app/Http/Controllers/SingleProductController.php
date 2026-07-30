<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SingleProductController extends Controller
{
    public function singleprod($slug)
{

    $name = str_replace('-', ' ', $slug);
 

    $singlepro = Product::where('product_name', $slug)->first();

    return view('pages.singleprod', compact('singlepro'));
}
}

