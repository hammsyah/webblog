<?php

namespace App\Controllers;

class Katagori extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'katagori'
        ];
        return view('katagori/katagori', $data);
    }
}
