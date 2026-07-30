<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormmail;

class QuoteController extends Controller
{
   public function send(Request $request)
{


    $validated = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',

        'phone' => 'nullable|string',
        'message' => 'nullable|string',

    ]);

    Mail::to('bharanidharan@saitechnosolutions.net')->send(new ContactFormmail($validated));

     return redirect('/contact');
}
}
