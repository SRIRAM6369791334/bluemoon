<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contactUs = \App\Models\ContactUs::first();
        if (!$contactUs) {
            $contactUs = new \App\Models\ContactUs();
        }
        return view('pages.contact-us-settings', compact('contactUs'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'page_title' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255',
            'subheading' => 'nullable|string',
            'address' => 'nullable|string',
            'phone' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'map_iframe' => 'nullable|string',
            'form_bg_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $contactUs = \App\Models\ContactUs::first();
        if (!$contactUs) {
            $contactUs = new \App\Models\ContactUs();
        }

        $contactUs->page_title = $request->page_title;
        $contactUs->heading = $request->heading;
        $contactUs->subheading = $request->subheading;
        $contactUs->address = $request->address;
        $contactUs->phone = $request->phone;
        $contactUs->email = $request->email;
        $contactUs->map_iframe = $request->map_iframe;

        // Handle Background Image
        if ($request->hasFile('form_bg_image')) {
            $file = $request->file('form_bg_image');
            $fileName = time() . '_contactbg_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/contact'), $fileName);
            $contactUs->form_bg_image = 'uploads/contact/' . $fileName;
        }

        $contactUs->save();

        return redirect()->back()->with('success', 'Contact Us settings updated successfully.');
    }

    public function show()
    {
        $contact = \App\Models\ContactUs::first();
        if (!$contact) {
            $contact = new \App\Models\ContactUs();
        }
        return view('pages.contact', compact('contact'));
    }
}
