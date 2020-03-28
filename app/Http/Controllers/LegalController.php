<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class LegalController extends Controller
{
    public function contact()
    {
        return view('contact.contact');
    }
    
    public function storeContact(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|max:255|email',
            'fname' => 'required|max:255',
            'lname' => 'max:255',
            'subject' => 'max:255',
            'message' => 'required',
            'previous_url' => 'url'
        ]);

        $contact = new Contact;
        $contact->fname = $validatedData['fname'];
        $contact->lname = $validatedData['lname'];
        $contact->email = $validatedData['email'];
        $contact->subject = $validatedData['subject'];
        $contact->message = $validatedData['message'];
        $contact->previous_url = $validatedData['previous_url'];
        $contact->save();

        return view('contact.thanks');
    }
    
    public function tos()
    {
        return view('legal.tos');
    }
    
    public function use_policy()
    {
        return view('legal.use_policy');
    }
    
    public function privacy()
    {
        return view('legal.privacy');
    }
    
    public function cookie_policy()
    {
        return view('legal.cookie_policy');
    }
    
}