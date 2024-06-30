<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananAkademikModel extends Model
{
    protected $table = 'layanan_akademik';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'materi_dosen'	, 'waktu_perkuliahan', 'referensi_pembelajaran', 'keahlian_dosen', 'kemampuan_staf', 'layanan_staf',
        'pedoman_kurikulum', 'pelayanan_dosen', 'keluhan_mahasiswa', 'kecepatan_pelayanan', 'profesionalisme', 'konsultasi_dosen', 
        'kesopanan_staf', 'transparansi_penilaian', 'suasana_akademik', 'penerapan_sanksi', 'kepedulian_dosen', 'monitoring_kemajuan', 
        'bantuan_dosen', 'minat_bakat', 'kebersihan_ruang','ketersediaan_ruang', 'sarana_pembelajaran', 'buku_referensi', 'fasilitas_ibadah', 
        'parkir_luas'
    ];
    public function ambil_data()
    {
        return $this->findAll();
    }
}
