<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about'); 
    }
    public function products()
    {
        return view('pages.products'); 
    }
    public function contactUs()
    {
        return view('pages.contact'); 
    }
    public function ginger()
    {
        return view('chart.ginger'); 
    }
}