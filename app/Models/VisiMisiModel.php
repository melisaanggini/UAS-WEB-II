<?php

namespace App\Models;
use App\Models\VisiMisiModel;

use CodeIgniter\Model;

class VisiMisiModel extends Model
{
    protected $table = 'visi_misi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'sudah_baca_visi_misi', 'sumber_info_visi_misi', 'sosialisasi_visi_misi', 'pemahaman_visi_misi', 'akomodasi_kegiatan_akademik', 'tercermin_visi_misi'
    ];
    function ambil_data(){

        return $this->findAll();
    }
}
