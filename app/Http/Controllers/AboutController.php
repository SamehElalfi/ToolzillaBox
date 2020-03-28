<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function faq()
    {
        return view('about.faq');
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