<?php

namespace App\Controllers;

use App\Models\Aa_user_levelModel; //daftarkan model yang dipakai
use App\Models\Aa_userModel;

class User_level extends BaseController
{
    protected $aa_user_levelModel; //buat properti baru agar bisa dipakai di semua method
    protected $aa_userModel;

    public function __construct() //kita bikin untuk menjalankan skrip yang dipakai untuk semua method disini
    {

        $this->aa_user_levelModel = new Aa_user_levelModel(); //membuat objecb baru bernama $aa_userModel
        $this->aa_userModel = new Aa_userModel();
    }

    public function index()
    {
        $level =  $this->aa_user_levelModel->findAll(); //membuat variabel level dan diisi semua data dari tabel aa_user_level

        $data = [ //membuat variabel data untuk dikirim ke view user
            'title' => 'Daftar User',
            'level' => $level // 'level' berisi semua data dari table aa_user_level

        ];

        return view('admin/user_level', $data); //kirim $data ke view user_level 
    }

    public function tambah() //fungsi untuk menyimpan data ke database
    {
        $data = $this->request->getPost(); //mengambil data dari submit tambah data
        $this->aa_user_levelModel->insert($data); // insert data ke data base
        return redirect()->to(base_url('user_level'))->with('success', 'Data Berhasil disimpan'); //kembalikan ke halaman daftar user setelah berhasil insert
    }

    public function ubah($id) //fungsi untuk menampilkan halaman edit level sekaligus mengirimkan data sesuai yang dipilih
    {

        $level = $this->aa_user_levelModel->find($id); //membuat variabel user dan diisi dari tabel user_level berdasar id

        $data = [
            'title' => 'Update Level', // untuk title tab
            'level' => $level // mengisi variabel level dengan level
        ];

        return view('admin/edit_user_level', $data); //kirim $data ke view edit_user


    }

    public function ubahsekarang($id = null) //fungsi untuk update data saat tombol simpan ditekan dan menangkap id_user
    {
        $data =  $this->request->getPost(); //mendapatkan data dari view edit data
        $this->aa_user_levelModel->update($id, $data); // mengupdate database berdasarkan data yang didapat
        return redirect()->to(base_url('/user_level'))->with('success', 'Data Berhasil Diupdate'); //jika berhasil tamilkan laman user
    }

    public function hapuslevel($id = null) //fungsi untuk delete data saat tombol simpan ditekan dan menangkap id_user
    {
        $apa = 'fid_level';
        $level =  $this->aa_user_levelModel->ambilsatuUserlevel($id);
        foreach ($level as $key => $value) {
            # code...
        }
        $user =  $this->aa_userModel->ambilsatuUser($value->id_level, $apa);
        if ($user != NULL) {
            return redirect()->to(base_url('/user_level'))->with('danger', 'Level tidak dapat dihapus, karena digunakan tabel lain'); //jika berhasil tamilkan laman user
        }

        $this->aa_user_levelModel->delete($id); // menghapus database berdasarkan data yang didapat
        return redirect()->to(base_url('/user_level'))->with('danger', 'Data Berhasil Dihapus'); //jika berhasil tamilkan laman user


    }
}
