<?php

namespace App\Controllers;

class Katagori extends BaseController
//nama kelas harus sama dengan nama file dan dimulai dengan huruf besar
{
    public function index()
    {

        $data = [ //membuat variabel data untuk dikirim ke view
            'title' => 'katagori'
        ];

        return view('katagori/katagori', $data);
    }

    // function tambah

    // function edit

    // fuction save_edit

    // function hapus
}
