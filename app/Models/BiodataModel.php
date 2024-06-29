<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'biodata';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_lengkap', 'nim', 'prodi', 'semester', 'no_hp', 'tahun_akademik', 'domisili'
    ];
}
