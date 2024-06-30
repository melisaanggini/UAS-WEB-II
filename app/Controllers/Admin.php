<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use App\Models\VisiMisiModel;
use App\Models\LayananAkademikModel;
class Admin extends BaseController
{
    public function index(): string
    {
        $biodataModel = new BiodataModel();
        $visiMisiModel = new VisiMisiModel();
        $layananAkademikModel = new LayananAkademikModel();
        
        $biodata = $biodataModel->ambil_data();
        $visi_misi = $visiMisiModel->ambil_data();
        $layanan_akademik = $layananAkademikModel->ambil_data();

        return view('admin', compact('biodata', 'visi_misi', 'layanan_akademik'));
    }


    public function deleteBiodata($id)
    {
        $biodata = new BiodataModel();
        $biodata->delete($id);
        return redirect()->to('/admin');
    }

    public function deleteVisiMisi($id)
    {
        $visi_misi = new VisiMisiModel();
        $visi_misi->delete($id);
        return redirect()->to('/admin');
    }

    public function deleteLayananAkademik($id)
    {
        $layanan_akademik = new LayananAkademikModel();
        $layanan_akademik->delete($id);
        return redirect()->to('/admin');
    }
}
