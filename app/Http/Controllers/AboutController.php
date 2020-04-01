<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function faq()
    {
        $questions = [
            [
                'q'=>'How can I get in touch with you?',
                'answer'=>'You can  send me feedback or your valuable suggestions at <a href="https://toolzillabox.com/contact">Contact us</a>.'
            ],
            [
                'q'=>'what is ToolzillaBox?',
                'answer'=>'ToolzillaBox is where you find most using tools  like a password generator and JSON formatter on the internet to help you improve your work.'
            ],
            [
                'q'=>'What should I do when I get an internal error?',
                'answer'=>'Resubmit your code once or twice. If that doesn\'t help please <a href="https://toolzillabox.com/contact">Contact us</a>.'
            ],
        ];
        return view('about.faq', compact('questions'));
    }

    public function about()
    {
        return view('about.about');
    }

    public function donate()
    {
        return view('about.donate');
    }
}