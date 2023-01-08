<?php

namespace App\Models;

use CodeIgniter\Model;

class Aa_user_levelModel extends Model
{
    protected $table = 'aa_user_level'; //daftarkan nama tabel disini
    protected $primaryKey = 'id'; //daftarkan field primari key disini
    protected $allowedFields = ['nama_level', 'id_level'];

    function ambilsatuUserlevel($id)
    {
        $builder = $this->db->table('aa_user_level'); //deklarasi nama tabel

        $query = $builder->getWhere(['id' => $id]);
        return $query->getResult();
    }
}
