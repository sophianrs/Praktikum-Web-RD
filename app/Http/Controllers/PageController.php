<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        
        $beauty = \App\Models\beauty::all();
        return view('index', compact('beauty'));
    }

    public function about ()
    {
        return view('about');
    }
}
