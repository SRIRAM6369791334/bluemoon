<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function usercreate(Request $request)
{
    // Validate phone uniqueness
    $request->validate([
        'username' => 'required|string|max:255',
        'email' => 'nullable|email|max:255',
        'phone' => 'required|digits_between:7,15|unique:customers,phone_number'
    ]);

    $username = $request->username;
    $phonenumber = $request->phone;
    $email = $request->email;

    $latestUser = Customer::orderBy('id', 'desc')->first();

    if ($latestUser && $latestUser->user_id) {
        $lastNumber = (int) str_replace('RAT', '', $latestUser->user_id);
        $newNumber = $lastNumber + 1;
    } else {
        $newNumber = 1;
    }

    $newUserId = 'RAT' . str_pad($newNumber, 3, '0', STR_PAD_LEFT);

    $userdata = new Customer();
    $userdata->user_id = $newUserId;
    $userdata->name = $username;
    $userdata->email = $email;
    $userdata->phone_number = $phonenumber;
    $userdata->save();

    return response()->json([
        "status" => "success",
        "message" => "Customer added successfully",
    ]);
}

public function userlogin(Request $request)
{
    $phone = $request->phone;

    // Find the customer by phone number
    $user = Customer::where('phone_number', $phone)->first();

    if ($user) {
        // Log in manually using the custom guard
        Auth::guard('customer')->login($user);

        return response()->json([
            'status' => 'success',
            'message' => 'Login successful. Redirecting...',
            'redirect' => url('/')
        ]);
    } else {
        return response()->json([
            'status' => 'error',
            'message' => 'Phone number not found.'
        ], 401);
    }
}

public function logout()
{
    Auth::guard('customer')->logout(); // use the correct guard

    return redirect('/login'); // redirect to your login page
}

public function userupdate(Request $request){

     $username = $request->username;
    $phonenumber = $request->phone;
    $email = $request->email;
    $userid = $request->userid;

   $userdata = Customer::find($userid);
     if ($userdata) {
        // Update the fields
        $userdata->name = $username;
        $userdata->phone_number = $phonenumber;
        $userdata->email = $email;

        // Save changes
        $userdata->save();

        return response()->json(['status' => 'success', 'message' => 'User updated successfully']);
    } else {
        return response()->json(['status' => 'error', 'message' => 'User not found'], 404);
    }
}

}
