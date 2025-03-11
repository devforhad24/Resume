<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('user.pages.index');
    }

    public function about()
    {
        return view('user.pages.about-us');
    }

    public function contact()
    {
        return view('user.pages.contact');
    }

    public function services()
    {
        return view('user.pages.services');
    }

    public function portfolio()
    {
        return view('user.pages.portfolio');
    }


}
