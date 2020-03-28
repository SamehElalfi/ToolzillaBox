<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;

class MailController extends Controller
{
    public function storeMail(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|max:255|email',
            'name' => 'max:255',
            'previous_url' => 'url',
        ]);

        $mail = new Mail;
        $mail->email = $validatedData['email'];
        if (isset($validatedData['name'])) {
            $mail->lname = $validatedData['name'];
        }
        if (isset($validatedData['previous_url'])) {
            $mail->previous_url = $validatedData['previous_url'];
        }
        $mail->save();

        return view('mail.thanks');
    }
}
