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
        $this->aa_userModel->insert($data); // insert data ke data base
        return redirect()->to(base_url('user'))->with('SUKSES', 'Data Berhasil disimpan'); //kembalikan ke halaman daftar user setelah berhasil insert
    }

    public function ubah($id_user) //fungsi untuk menampilkan halaman edit user sekaligus mengirimkan data sesuai yang dipilih
    {
        $user = $this->aa_userModel->find($id_user); //membuat variabel user dan diisi dari tabel user berdasar id
        $level =  $this->aa_user_levelModel->findAll(); //membuat variabel level dan diisi semua data dari tabel aa_user_level
        if (is_object($user)) { //jika data ditemukan berdasarkan id maka proses
            $data = [
                'user' => $user, //mengisi variabel user dengan user
                'level' => $level // mengisi variabel level dengan level
            ];

            return view('admin/edit_user', $data); //kirim $data ke view edit_user
        } else { //jika data ID tidak titemukan tampilkan pesan eror dari kodeikniter dibawah ini
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function ubahsekarang($id = null) //fungsi untuk update data saat tombol simpan ditekan
    {
        $data =  $this->request->getPost(); //mendapatkan data dari view edit data
        $this->aa_userModel->update($id, $data); // mengupdate database berdasarkan data yang didapat
        return redirect()->to(base_url('/user'))->with('success', 'Data Berhasil Diupdate');
    }
}
