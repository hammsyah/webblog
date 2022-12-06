<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('frontend/index');
        // return view('page/home');
    }
}
