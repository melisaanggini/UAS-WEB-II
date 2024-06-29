<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananKemahasiswaanModel extends Model
{
    protected $table = 'layanan_kemahasiswaan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'kepuasan_penalaran', 'kepuasan_karir', 'kepuasan_bimbingan'
    ];
}
