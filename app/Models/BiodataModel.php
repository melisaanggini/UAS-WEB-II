<?php

namespace App\Models;
use App\Models\BiodataModel;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table = 'biodata';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'namaLengkap', 'NIM', 'programStudi', 'semester', 'noHandphone', 'tahunAkademik', 'domisili'
    ];

    public function ambil_data()
    {
        return $this->findAll();
    }
}


