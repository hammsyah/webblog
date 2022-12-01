<?php

namespace App\Controllers;

use App\Models\Aa_userModel;

class User extends BaseController
{
    protected $aa_userModel; //buat properti baru agar bisa dipakai di semua method

    public function __construct() //kita bikin untuk menjalankan skrip yang dipakai untuk semua method disini
    {
        $this->aa_userModel = new Aa_userModel(); //membuat objecb baru bernama $aa_userModel
    }
    public function index()
    {

        $user = $this->aa_userModel->findAll(); //membuat variabel user dan diisi dari data tabel user database

        $data = [ //membuat variabel data untuk dikirim ke view user
            'title' => 'Daftar User',
            'user' => $user
        ];

        return view('admin/user', $data); //kirim $data ke view user
    }
}
