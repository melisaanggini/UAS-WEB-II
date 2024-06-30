<?php

namespace App\Controllers;
use App\Models\LayananAkademikModel;
class KuisionerLayananAkademik extends BaseController
{
    public function index(): string
    {
        return view('kuisioner_layanan_akademik');
    }
    public function create()
{
    $kuisioner = new LayananAkademikModel();
    $kuisioner->insert([
            "materi_dosen" => $this->request->getPost('materi_dosen'),
            "waktu_perkuliahan" => $this->request->getPost('waktu_perkuliahan'),
            "referensi_pembelajaran" => $this->request->getPost('referensi_pembelajaran'),
            "keahlian_dosen" => $this->request->getPost('keahlian_dosen'),
            "kemampuan_staf" => $this->request->getPost('kemampuan_staf'),
            "layanan_staf" => $this->request->getPost('layanan_staf'),
            "pedoman_kurikulum" => $this->request->getPost('pedoman_kurikulum'),
            "pelayanan_dosen" => $this->request->getPost('pelayanan_dosen'),
            "keluhan_mahasiswa" => $this->request->getPost('keluhan_mahasiswa'),
            "kecepatan_pelayanan" => $this->request->getPost('kecepatan_pelayanan'),
            "profesionalisme" => $this->request->getPost('profesionalisme'),
            "konsultasi_dosen" => $this->request->getPost('konsultasi_dosen'),
            "kesopanan_staf" => $this->request->getPost('kesopanan_staf'),
            "transparansi_penilaian" => $this->request->getPost('transparansi_penilaian'),
            "suasana_akademik" => $this->request->getPost('suasana_akademik'),
            "penerapan_sanksi" => $this->request->getPost('penerapan_sanksi'),
            "kepedulian_dosen" => $this->request->getPost('kepedulian_dosen'),
            "monitoring_kemajuan" => $this->request->getPost('monitoring_kemajuan'),
            "bantuan_dosen" => $this->request->getPost('bantuan_dosen'),
            "minat_bakat" => $this->request->getPost('minat_bakat'),
            "kebersihan_ruang" => $this->request->getPost('kebersihan_ruang'),
            "ketersediaan_ruang" => $this->request->getPost('ketersediaan_ruang'),
            "sarana_pembelajaran" => $this->request->getPost('sarana_pembelajaran'),
            "buku_referensi" => $this->request->getPost('buku_referensi'),
            "fasilitas_ibadah" => $this->request->getPost('fasilitas_ibadah'),
            "parkir_luas" => $this->request->getPost('parkir_luas')
    ]);
    return redirect('kuisioner_layanan_kemahasiswaan');
}
}
