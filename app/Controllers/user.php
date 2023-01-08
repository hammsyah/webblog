<?php

namespace App\Controllers;

use App\Models\Aa_userModel;
use App\Models\Aa_user_levelModel;


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
        $level =  $this->aa_user_levelModel->findAll(); //membuat variabel level dan diisi semua data dari tabel aa_user_level
        $data = [ //membuat variabel data untuk dikirim ke view user
            'title' => 'Daftar User',
            'user' => $user, // 'user' berisi semua data dari table aa_user
            'level' => $level // 'level' berisi semua data dari table aa_user_level
        ];

        return view('admin/user', $data); //kirim $data ke view user
    }

    public function mautambah() //fungsi untuk menangani input data
    {
        session(); //aktifkan session untuk mengambil data dalam session 'dari function tambah()'
        $level =  $this->aa_user_levelModel->findAll(); //membuat variabel level dan diisi semua data dari tabel aa_user_level, nanti digunakan untuk opsi level user
        $data = [
            'title' => 'Tambah User',
            'level' => $level,
            'salahnya' => \Config\Services::validation() //mengambil data dari sesion
        ];
        return view('admin/tambah_user', $data);
    }

    public function tambah() //fungsi untuk menyimpan data ke database
    {
        //validasi input, cek input sudah sesuai ketentuan apa belum
        if (!$this->validate([ //untuk membuat validasi form
            'user_name' => [ //name dari input
                'rules' => 'required|is_unique[aa_user.user_name]', //syarat yang ditentukan
                'errors' => [
                    'required' => 'User Name atau email harus diisi', //pesan jika salah berdasarkan syarat
                    'is_unique' => 'User Name atau email sudah terdaftar' //pesan jika salah berdasarkan syarat
                ]
            ],
            'realname' => [ //namae dari input
                'rules' => 'required',
                'errors' => [
                    'required' => 'Real Name Tidak Boleh Kosong'
                ]
            ],
            'pasword' => [ //name dari input
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pasword Tidak Boleh Kosong'
                ]
            ],
            'pasword2' => [ //name dari input
                'rules' => 'matches[pasword]',
                'errors' => [
                    'matches' => 'isian samakan dengan password'
                ]
            ]
        ])) {
            $salahnya = \Config\Services::validation(); //mengambil semua pesan eror dan masukkan ke dalam variable $salahnya
            return redirect()->to('/user/mautambah')->withInput()->with('salahnya', $salahnya);
            //redirect dengan menyertakan data:
            //withInput = semua data yang dinputkan dikembalikan lagi. Fungsi untuk menangkpa datanya adalah old('name') pada view
            //with = megirim data speri array

            //data dari withInput dan with disimpan dalam session, sehingga untuk mengambilnya harus dijalankan session ( pada function tambah())
        }

        //jika semua input valid baru data disimpan ke database dengan code dibawah ini

        $data = [
            'fid_level' => $this->request->getPost('fid_level'), //mengambil data dari submit tambah data
            'user_name' => $this->request->getPost('user_name'),
            'pasword' => password_hash($this->request->getPost('pasword'), PASSWORD_DEFAULT),
            'realname' => $this->request->getPost('realname'),
            'enable_user' => '1',

        ];

        $this->aa_userModel->insert($data); // insert data ke data base
        return redirect()->to(base_url('user/mautambah'))->with('success', 'Data Berhasil disimpan'); //kembalikan ke halaman daftar user setelah berhasil insert
    }

    public function ubah($id_user) //fungsi untuk menampilkan halaman edit user sekaligus mengirimkan data sesuai yang dipilih
    {
        $user = $this->aa_userModel->find($id_user); //membuat variabel user dan diisi dari tabel user berdasar id
        $level =  $this->aa_user_levelModel->findAll(); //membuat variabel level dan diisi semua data dari tabel aa_user_level
        if (is_object($user)) { //jika data ditemukan berdasarkan id maka proses
            $data = [
                'title' => 'Update User', // untuk title tab
                'user' => $user, //mengisi variabel user dengan user
                'level' => $level // mengisi variabel level dengan level
            ];

            return view('admin/edit_user', $data); //kirim $data ke view edit_user
        } else { //jika data ID tidak titemukan tampilkan pesan eror dari kodeikniter dibawah ini
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function ubahsekarang($id = null) //fungsi untuk update data saat tombol simpan ditekan dan menangkap id_user
    {
        $data =  $this->request->getPost(); //mendapatkan data dari view edit data
        $this->aa_userModel->update($id, $data); // mengupdate database berdasarkan data yang didapat
        return redirect()->to(base_url('/user'))->with('success', 'Data Berhasil Diupdate'); //jika berhasil tamilkan laman user
    }

    public function hapususer($id = null) //fungsi untuk delete data saat tombol simpan ditekan dan menangkap id_user
    {
        $this->aa_userModel->delete($id); // menghapus database berdasarkan data yang didapat
        return redirect()->to(base_url('/user'))->with('danger', 'Data Berhasil Hapus'); //jika berhasil tamilkan laman user
    }

    public function resetpasword($id_user)
    {
        session(); //aktifkan session untuk mengambil data dalam session 'dari function resetpasworsekarang()'
        $user = $this->aa_userModel->find($id_user); //membuat variabel user dan diisi dari tabel user berdasar id
        $data = [ //buat array
            'title' => 'Reset Password',
            'user' => $user,
            'salahnya' => \Config\Services::validation() //mengambil data dari sesion
        ];

        return view('admin/resetPasword', $data); //kirim $data ke view resetPasword
    }

    public function resetpaswordsekarang($id_user = null) //aksi saat tombol simpan di tekan
    {
        //validasi input, cek input sudah sesuai ketentuan apa belum
        if (!$this->validate([ //untuk membuat validasi form

            'pasword' => [ //name dari input
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pasword Tidak Boleh Kosong'
                ]
            ],
            'pasword2' => [ //name dari input
                'rules' => 'matches[pasword]',
                'errors' => [
                    'matches' => 'isian samakan dengan password'
                ]
            ]
        ])) {
            $salahnya = \Config\Services::validation(); //mengambil semua pesan eror dan masukkan ke dalam variable $salahnya
            return redirect()->to('/user/resetpasword/' . $id_user)->withInput()->with('salahnya', $salahnya);
            //redirect dengan menyertakan data:
            //withInput = semua data yang dinputkan dikembalikan lagi. Fungsi untuk menangkpa datanya adalah old('name') pada view
            //with = megirim data speri array

            //data dari withInput dan with disimpan dalam session, sehingga untuk mengambilnya harus dijalankan session ( pada function tambah())
        }

        //jika semua input valid baru data disimpan ke database dengan code dibawah ini

        // $data =  $this->request->getPost(); //mendapatkan data dari view reset password

        $data = [
            'pasword' => password_hash($this->request->getPost('pasword'), PASSWORD_DEFAULT),
        ];

        $this->aa_userModel->update($id_user, $data); // mengupdate database berdasarkan data yang didapat
        return redirect()->to(base_url('/user'))->with('success', 'Password Berhasil di RESET'); //jika berhasil tamilkan laman user
    }

    public function enableuser($id_user, $en) //aksi dari tombol Enabel / Disabel dan menangkap data
    {
        $data = [ //membuat aray data
            'enable_user' => $en //membuat index 'enable_user' samakan dengan nama filed database yang diupdate
        ];
        $this->aa_userModel->update($id_user, $data); // mengupdate database berdasarkan data yang didapat
        return redirect()->to(base_url('/user')); //->with('success', 'Data Berhasil Diupdate'); //jika berhasil tamilkan laman user
    }
}

//tutorial form validation: https://www.youtube.com/watch?v=IfMWgZf-To0
//tutorial alert: 
