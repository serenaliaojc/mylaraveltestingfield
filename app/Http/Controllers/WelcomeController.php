<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function index() {
        $links = \App\Link::all();
        // // with()
        // return view('welcome')->with('links', $links);
        // // dynamic method to name the variable
        // return view('welcome')->withLinks($links);
        return view('welcome', ['links' => $links]);
    }
}
