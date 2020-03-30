<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function index()
    {
        return view('tools.index');
    }
    
    public function jsonFormatter() {
        return view('tools.json_formatter');
    }

    public function passwordGenerator() {
        return view('tools.password_generator');
    }
}