<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\OrderPlacedMail;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{




public function quickcheckout($id)
{
    $categories = Category::with('products')->get(); // eager load products
    return view('pages.quickcheckout', compact('categories', 'id'));
}



public function placeOrder(Request $request)
{
    DB::beginTransaction();
    try {
        // 1. Save customer
        // $customerData = [];
        // foreach ($request->customer as $item) {
        //     $customerData[$item['name']] = $item['value'];
        // }

        // $customer = Customer::create($customerData);
         $request->validate([
            'customer.name' => 'required|string|max:255',
            'customer.phone' => 'required|string|max:20',
            'customer.email' => 'nullable|email',
            'customer.address' => 'required|string',
            'customer.state' => 'nullable|string',
            'customer.city' => 'nullable|string',
            // 'customer.pincode' => 'nullable|string',
            // 'pro_ids' => 'required|array',
            // 'qtys' => 'required|array',
            // 'subtotal' => 'required|numeric',
            // 'discount' => 'required|numeric',
            // 'total' => 'required|numeric',
        ]);

                // Check if customer exists by phone number
        $customer = Customer::where('phone_number', $request->customer['phone'])->first();

        if ($customer) {
            // Update existing customer
            $customer->name = $request->customer['name'];
            $customer->email = $request->customer['email'];
            $customer->address = $request->customer['address'];
            $customer->state = $request->customer['state'];
            $customer->city = $request->customer['city'];
            $customer->pincode = "";
            $customer->save();
        } else {
            // Insert new customer
            $customer = new Customer();
            $customer->name = $request->customer['name'];
            $customer->phone_number = $request->customer['phone'];
            $customer->email = $request->customer['email'];
            $customer->address = $request->customer['address'];
            $customer->state = $request->customer['state'];
            $customer->city = $request->customer['city'];
            $customer->pincode = "";
            $customer->save();
        }

         $maxValue = ProductOrder::max('id');
        $invID = ($maxValue !== null) ? $maxValue + 1 : 1;
        $invID = str_pad($invID, 5, '0', STR_PAD_LEFT);
        $orderid = "order" . $invID;

        // 2. Save order
        $order = ProductOrder::create([
            'user_id' => $customer->id,
            'oeder_id' =>$orderid,
            'sub_total' => $request->subtotal,
            'shipping' => $request->shipping,
            'total' => $request->total,
            'status' => 'pending',
        ]);

        // 3. Save each product
        foreach ($request->cart as $product) {

             $productRecord = DB::table('products')->where('product_name', $product['name'])->first();


            DB::table('product_slots')->insert([
                'user_id' => $customer->id,
                'product_id' => $productRecord->id,
                'order_id' => $orderid,
                'product_name' => $product['name'],
                'qty' => $product['qty'],
                'product_total' => $product['total'],
            ]);
        }



//        if ($customer->email) {
//     Mail::to($customer->email)->send(new OrderPlacedMail($order, $customer));
// }

        DB::commit();

        // Authenticate user
        Auth::guard('customer')->login($customer);

        return response()->json([
            'status' => '200',
             'message' => 'Order Palce Successfully',
            'redirect' => url('/thankyou')
        ]);
    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json(['error' => $e->getMessage()], 500);
    }
}



}
