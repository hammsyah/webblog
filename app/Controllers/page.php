<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dasboard'
        ];
        return view('page/dasboard', $data);
    }

    public function katagori()
    {

        $data = [
            'title' => 'Kategori'
        ];
        return view('page/katagori', $data);
        // arahkan ke view katagori didalam folder page
    }
}
