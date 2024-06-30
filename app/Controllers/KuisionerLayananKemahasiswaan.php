<?php

namespace App\Controllers;
use App\Models\LayananKemahasiswaanModel;

class KuisionerLayananKemahasiswaan extends BaseController
{
    public function index(): string
    {
        return view('kuisioner_layanan_kemahasiswaan');
    }
    public function create()
{
    $kuisioner = new LayananKemahasiswaanModel();
    $kuisioner->insert([
            "layanan_penalaran" => $this->request->getPost('layanan_penalaran'),
            "layanan_karir" => $this->request->getPost('layanan_karir'),
            "layanan_bimbingan" => $this->request->getPost('layanan_bimbingan'),
    ]);
    return redirect('kuisioner_selesai');
}
}
