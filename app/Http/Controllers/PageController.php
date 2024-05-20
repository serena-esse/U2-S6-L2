<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//non fanno niente di speciale, ritornano la vista

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}