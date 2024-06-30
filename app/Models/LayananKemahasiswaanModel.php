<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananKemahasiswaanModel extends Model
{
    protected $table = 'layanan_kemahasiswaan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'layanan_penalaran', 'layanan_karir', 'layanan_bimbingan'
    ];
}
