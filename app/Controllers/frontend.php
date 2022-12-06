<?php

namespace App\Controllers;

class Frontend extends BaseController
{
    public function index()
    {
        return view('frontend/index');
    }

    public function singlepost()
    {
        return view('frontend/single-post');
    }

    public function categories()
    {
        return view('frontend/categories');
    }

    public function about()
    {
        return view('frontend/about');
    }

    public function contact()
    {
        return view('frontend/contact');
    }
}
