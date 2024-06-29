<?php

namespace App\Models;

use CodeIgniter\Model;

class VisiMisiModel extends Model
{
    protected $table = 'visi_misi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'pernah_membaca', 'sumber_informasi', 'pernah_mendapat_sosialisasi', 'tingkat_pemahaman', 'aspek_terakomodasi', 'cerminan_visi_misi'
    ];
}
