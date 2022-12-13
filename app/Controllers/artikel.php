<?php

namespace App\Controllers;

class Artikel extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Artikel'
        ];
        return view('artikel/artikel', $data);
    }
}
