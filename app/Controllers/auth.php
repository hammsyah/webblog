<?php

namespace App\Controllers;

use App\Models\Aa_userModel;

class Auth extends BaseController
{
    // protected $aa_user_levelModel;

    public function Register()
    {
        $data = [
            'title' => 'Register'
        ];

        return view('home/home');
    }


    public function login()
    {
        $apa = 'user_name';
        //membuat object baru untuk model
        $userModel = new Aa_userModel;

        //ambil data dari post login
        $user_name = $this->request->getPost('user_name');
        $password = $this->request->getPost('pasword');

        //ambil data data dari tabel user berdasarkan username yang diinput saat login
        $row = $userModel->ambilsatuUser($user_name, $apa);
        foreach ($row as $key => $roww) {
        }
        //jika user tidak tidtemukan
        if ($row == NULL) {
            //session()->setFlashdata('danger','username anda salah');
            return redirect()->to(base_url('frontend/login'))->with('danger', 'Username tidak ditemukan'); //kembalikan ke halaman login
        }

        //jika user name ditemukan, lakukan verifikasi pasword
        if (password_verify($password, $roww->pasword)) {
            //jika pasword benar siapkan data session
            $data = [
                'log' => TRUE,
                'realname' => $roww->realname,
                'user_name' => $roww->user_name,
                'level' => $roww->fid_level,
                'nama_level' => $roww->nama_level
            ];
            session()->set($data);
            //setelah berhasil login lempar ke halaman dasboard
            return redirect()->to(base_url('dasboard/index'))->with('success', 'Berhasil Login ' . $roww->nama_level); //kembalikan ke halaman login
        }
        //Jika pasword salah, lempar ke halaman login lagi disertai pesan pasword salah
        return redirect()->to(base_url('frontend/login'))->with('danger', 'Password Salah'); //kembalikan ke halaman login

    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'))->with('success', 'Berhasil Logout '); //kembalikan ke halaman login
    }
}
