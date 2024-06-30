<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use App\Models\VisiMisiModel;

class Admin extends BaseController
{
    public function index(): string
    {
        $biodata = new BiodataModel();
        $visi_misi = new VisiMisiModel();
        $layanan_akademik = new LayananAkademikModel();
        
        $data['biodata'] = $biodata->ambil_data();
        $data['visi_misi'] = $visi_misi->ambil_data();
        $data['layanan_akademik'] = $layanan_akademik->ambil_data();

        return view('admin', compact('data'));
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
