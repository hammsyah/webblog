<?php

namespace App\Models;

use CodeIgniter\Model;

class Aa_userModel extends Model
{
    protected $table = 'aa_user'; //daftarkan nama tabel disini
    protected $primaryKey = 'id_user'; //daftarkan field primari key disini
    protected $returnType = 'object';
    protected $allowedFields = ['fid_level', 'user_name', 'pasword', 'realname', 'enable_user', 'keterangan'];

    function ambilSemua() //membuat fungsi baru untuk mengambil semua data, ini akan dipanggil di kontroller user
    {
        $builder = $this->db->table('aa_user'); //deklarasi nama tabel
        $builder->join('aa_user_level', 'aa_user_level.id_level = aa_user.fid_level');
        //mengambil tabel aa_user_level, yang sama ditabel aa_user_level kolom id_level = tabel aa_user kolom fid_level
        $query = $builder->get();
        return $query->getResult();
    }
}
