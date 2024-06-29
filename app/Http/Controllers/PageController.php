<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('welcome'); 
    }
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
    public function wetGinger()
    {
        return view('chart.wetginger'); 
    }
    public function driedTurmeric()
    {
        return view('chart.driedturmeric'); 
    }
    public function tumericPowder()
    {
        return view('chart.tumericpowder'); 
    }
    public function fingerTumeric()
    {
        return view('chart.fingertumeric'); 
    }
    public function documentation()
    {
        return view('dropdown.documentation'); 
    }
    public function ourResource()
    {
        return view('dropdown.ourResource'); 
    }
    public function qualityControl()
    {
        return view('dropdown.qualityControl'); 
    }
    public function guideLine()
    {
        return view('dropdown.guideLine'); 
    }
    public function processProduction()
    {
        return view('dropdown.processProduction'); 
    }
}