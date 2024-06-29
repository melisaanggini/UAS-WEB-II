<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use App\Models\VisiMisiModel;
use App\Models\LayananAkademikModel;
use App\Models\LayananKemahasiswaanModel;

class KuisionerController extends BaseController
{
    public function index()
    {
        $biodataModel = new BiodataModel();
        $visiMisiModel = new VisiMisiModel();
        $layananAkademikModel = new LayananAkademikModel();
        $layananKemahasiswaanModel = new LayananKemahasiswaanModel();
        
        // Example of fetching all data
        $biodata = $biodataModel->findAll();
        $visiMisi = $visiMisiModel->findAll();
        $layananAkademik = $layananAkademikModel->findAll();
        $layananKemahasiswaan = $layananKemahasiswaanModel->findAll();
        
        return view('kuisioner_view', [
            'biodata' => $biodata,
            'visiMisi' => $visiMisi,
            'layananAkademik' => $layananAkademik,
            'layananKemahasiswaan' => $layananKemahasiswaan
        ]);
    }
}
