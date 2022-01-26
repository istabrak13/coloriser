<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function home()
    {
        return view ('site.accueil');
    }
    public function contact()
    {
        return view ('site.contact');
    }
    public function about()
    {
        return view ('site.about');
    }
}
