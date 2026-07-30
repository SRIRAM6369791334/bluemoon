<?php

namespace App\Http\Controllers;

use App\Models\ProductOrder;
use Illuminate\Http\Request;

class ProductorderController extends Controller
{
    public function orderdetails($orderid){

        $orderdetails = ProductOrder::join('product_slots','product_slots.order_id','=','product_orders.oeder_id')->join('products','products.id','=','product_slots.product_id')->select('product_orders.*','product_slots.qty','products.product_name','products.product_image','products.product_regular_price')->where('product_orders.oeder_id',$orderid)->get();

        dd($orderdetails);

        return view('pages.orderdetails', compact('orderdetails'));

    }
}
