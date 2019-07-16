<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hello = 'Hello World!!!';
        return view('hello', compact('hello'));
    }
}
