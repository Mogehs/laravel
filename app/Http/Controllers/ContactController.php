<?php

namespace App\Http\Controllers;
use App\Models\Services;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactPage()
    {
        $contacts = Contact::all();
        $services = Services::all();
        return view('myadmincontact',['title' => 'Contacted Us | The Home Team','allServices'=>$services,'contacts'=>$contacts]);
    }

        public function submitContactForm(Request $request)
        {
            // Validate the request
            $request->validate([
                'txtname' => 'required|string|max:255',
                'txtphone' => 'required|string|max:15',
                'txtemail' => 'required|email|max:255',
                'txtmessage' => 'required|string',
            ]);
    
            // Save the contact data to the database
            Contact::create([
                'name' => $request->input('txtname'),
                'phone' => $request->input('txtphone'),
                'email' => $request->input('txtemail'),
                'message' => $request->input('txtmessage'),
            ]);
    
            // Return a response
            return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you shortly.');
        }
}
