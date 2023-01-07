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
        //membuat object baru untuk model
        $userModel = new Aa_userModel;

        //ambil data dari post login
        $user_name = $this->request->getPost('user_name');
        $password = $this->request->getPost('pasword');

        //ambil data data dari tabel user berdasarkan username yang diinput saat login
        $row = $userModel->ambilsatuUser($user_name);
        foreach ($row as $key => $roww) {
        }
        //jika user tidak tidtemukan
        if ($row == NULL) {
            //session()->setFlashdata('danger','username anda salah');
            return redirect()->to(base_url('login/index'))->with('danger', 'Username tidak ditemukan'); //kembalikan ke halaman login
        }

        if (password_verify($password, $roww->pasword)) {
            $data = [
                'log' => TRUE,
                'realname' => $roww->realname,
                'user_name' => $roww->user_name,
                'level' => $roww->level,
                'nama_level' => $roww->nama_level
            ];
            session()->set($data);
            // session()->setFlashdata('success','Berhasil Login');
            return redirect()->to(base_url('page/dasboard'))->with('succes', 'Berhasil Login ' . $roww->nama_level); //kembalikan ke halaman login
        }

        return redirect()->to(base_url('login/index'))->with('danger', 'Password Salah'); //kembalikan ke halaman login

    }
}
