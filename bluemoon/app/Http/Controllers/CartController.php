<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function updateQty(Request $request)
    {
        $productId = $request->product_id;
        $quantity = $request->quantity;
        $userId = Auth::guard('customer')->id();
        $product = Product::findOrFail($productId);

        if (!Auth::guard('customer')->check()) {
            return response()->json(['redirect' => redirect('/login')]);
        }

        if($quantity  == 0){
            $cartItem = Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();


            Cart::where('id',  $cartItem->id)->delete();


        }else{

            $cartItem = Cart::where('user_id', $userId)
            ->where('product_id', $productId)
            ->first();

            if ($cartItem) {
                $cartItem->quantity = $quantity;
                $cartItem->mrp_price = $product->product_mrp_price;
                $cartItem->sales_price = $product->product_regular_price;
                $cartItem->save();
            } else {
                Cart::create([
                    'user_id' => $userId,
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'mrp_price' => $product->product_mrp_price,
                    'sales_price' => $product->product_regular_price,
                ]);
            }

        }





        $cartItems = Cart::where('user_id', $userId)
                         ->with('product')
                         ->get();

        $cartTotal = $cartItems->sum(function ($item) {
            return $item->sales_price * $item->quantity;
        });

        $cartCount = $cartItems->sum('quantity');

        return response()->json([
            'status' => 'success',
            'cartTotal' => $cartTotal,
            'cartCount' => $cartCount
        ]);
    }

    public function removeItem($id)
    {
        Cart::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Item removed from cart.');
    }


    public function getStateCities($state_id)
    {

       $cities = DB::table('city_list')
          ->select('city_name','id')
          ->where('state_code', '=', $state_id)
          ->get();

       return response()->json($cities);
    }


    public function getCitiesarea($city_id){
        $area = DB::table('areas')
        ->select('area_name','id')
        ->where('city_id',$city_id)
        ->get();

         return response()->json($area);

    }


    public function updateCart(Request $request)
{


    $product_id = $request->product_id;
    $qty = $request->qty;
    $price = $request->price;
    $mrp = $request->mrp;

    $total = $qty * $price;
    $mrptotal = $qty * $mrp;

    $userId =  Auth::guard('customer')->id(); // or pass via AJAX if guest cart
    if (!$userId) {
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    $cartItem = Cart::where('user_id', $userId)
                    ->where('product_id', $product_id)
                    ->first();

    if ($qty  == 0) {
        if ($cartItem) {
            $cartItem->delete(); // Remove from cart if qty is 0
        }
    } else {
        if ($cartItem) {
            $cartItem->update([
                'quantity' => $qty,
                'mrp_price' => $mrp,
                'sales_price' => $price,
                'total_price' => $total,
                'mrptotal' => $mrptotal,
            ]);
        } else {
            Cart::create([
                'user_id' => $userId,
                'product_id' => $product_id,
                'quantity' => $qty,
                'mrp_price' => $mrp,
                'sales_price' => $price,
                 'total_price' => $total,
                 'mrptotal' => $mrptotal,

            ]);
        }
    }

     $cartTotal = Cart::sum('total_price');
     $cartcount = Cart::count();

    return response()->json(['status' => 'success','total_price' => number_format($cartTotal, 2),'count' => $cartcount ]);
}


}
