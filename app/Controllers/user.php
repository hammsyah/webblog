<?php

namespace App\Controllers;

use App\Models\Aa_userModel;
use App\Models\Aa_user_levelModel;
use PhpParser\Node\Expr\FuncCall;

class User extends BaseController
{
    protected $aa_userModel; //buat properti baru agar bisa dipakai di semua method
    protected $aa_user_levelModel;

    public function __construct() //kita bikin untuk menjalankan skrip yang dipakai untuk semua method disini
    {
        $this->aa_userModel = new Aa_userModel(); //membuat objecb baru bernama $aa_userModel
        $this->aa_user_levelModel = new Aa_user_levelModel();
    }
    public function index()
    {

        $user = $this->aa_userModel->ambilSemua(); //membuat variabel user dan diisi dari data hasil join tabel user dan user_level. join dilakukan pada model aa_userModel

        $data = [ //membuat variabel data untuk dikirim ke view user
            'title' => 'Daftar User',
            'user' => $user
        ];

        return view('admin/user', $data); //kirim $data ke view user
    }

    public function tambah() //fungsi untuk menyimpan data ke database
    {
        $data = $this->request->getPost(); //mengambil data dari submit tambah data
        $this->aa_userModel->insert($data);
        return redirect()->to(base_url('user'))->with('SUKSES', 'Data Berhasil disimpan');
    }

    public function ubah($id)
    {
        $data = [
            'coba' => $id
        ];
        return view('admin/edit_user', $data); //kirim $data ke view user
    }
}
