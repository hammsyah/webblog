<?php

namespace App\Models;

use CodeIgniter\Model;

class Aa_katagori_model extends Model
{
    protected $table = 'dm_category'; //daftarkan nama tabel disini
    protected $primaryKey = 'id_category'; //daftarkan field primari key disini
    protected $allowedFields = ['nama_category', 'id_category'];
}
