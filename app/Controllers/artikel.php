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

    //function tambah

    //Function edit

    //Function save_edit

    //Function hapus
}
