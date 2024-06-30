<?php

namespace App\Controllers;
use App\Models\VisiMisiModel;

class KuisionerVisiMisi extends BaseController
{
    public function index(): string
    {
        return view('kuisioner_visi_misi');
    }

    public function create()
    {
        // jika data valid, simpan ke database
        $visi_misi = new VisiMisiModel();
        $visi_misi->insert([
            "sudah_baca_visi_misi" => $this->request->getPost('sudah_baca_visi_misi'),
            "sumber_info_visi_misi" => $this->request->getPost('sumber_info_visi_misi'),
            "sosialisasi_visi_misi" => $this->request->getPost('sosialisasi_visi_misi'),
            "pemahaman_visi_misi" => $this->request->getPost('pemahaman_visi_misi'),
            "akomodasi_kegiatan_akademik" => $this->request->getPost('akomodasi_kegiatan_akademik'),
            "tercermin_visi_misi" => $this->request->getPost('tercermin_visi_misi')
        ]);
        return redirect('kuisioner_layanan_akademik');
		
    }
}
