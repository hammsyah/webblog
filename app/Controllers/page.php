<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        return view('page/dasboard');
    }

    public function katagori()
    {
        return view('page/katagori');
        // arahkan ke view katagori didalam folder page
    }
}
