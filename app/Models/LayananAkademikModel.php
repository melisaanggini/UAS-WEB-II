<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananAkademikModel extends Model
{
    protected $table = 'layanan_akademik';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'kejelasan_materi', 'ketepatan_waktu', 'kelengkapan_referensi', 'keahlian_dosen', 'kemampuan_staf', 'kualitas_layanan', 'pedoman_kurikulum',
        'kesediaan_pelayanan', 'kecepatan_tanggapan', 'kecepatan_pelayanan', 'sikap_profesionalisme', 'konsultasi_dosen', 'keramahan_staf',
        'transparansi_penilaian', 'suasana_akademik', 'penerapan_sanksi', 'kepedulian_dosen', 'monitoring_kemajuan', 'kesiadaan_bantuan',
        'pengembangan_minat_bakat', 'kerapian_kebersihan_ruang', 'ketersediaan_ruang', 'sarana_pembelajaran', 'buku_referensi', 'fasilitas_ibadah', 'tempat_parkir'
    ];
}
