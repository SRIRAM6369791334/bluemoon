<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\DataTables\CustomerDataTable;
use App\Models\Custmer;

class CustmerController extends Controller
{
     public function index() {
       $customer = Custmer::all();
        return view('pages.customer',compact('customer'));
    }

     public function getCustomer() {
        return datatables()->eloquent( Custmer::query() )->toJson();
    }

    public function edit($id)
    {
        $customer = Custmer::findOrFail($id);
        return response()->json([
            'status' => '200',
            'data' => $customer
        ]);
    }

    public function updateCustomer(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'name' => 'required|string|max:225',
            'phone_number' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'address' => 'nullable|string',
            'state' => 'nullable|string|max:225',
            'city' => 'nullable|string|max:225',
            'pincode' => 'nullable|string|max:20',
        ]);

        try {
            $customer = Custmer::findOrFail($request->customer_id);
            $customer->name = $request->name;
            $customer->phone_number = $request->phone_number;
            $customer->email = $request->email;
            $customer->address = $request->address;
            $customer->state = $request->state;
            $customer->city = $request->city;
            $customer->pincode = $request->pincode ?? '';
            $customer->save();

            return response()->json([
                'status' => '200',
                'message' => 'Customer details updated successfully',
                'data' => $customer
            ]);
        } catch (\Throwable $th) {
            Log::error($th);
            return response()->json([
                'status' => '500',
                'message' => 'Failed to update customer: ' . $th->getMessage()
            ], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $request->merge(['customer_id' => $id]);
        return $this->updateCustomer($request);
    }
}
