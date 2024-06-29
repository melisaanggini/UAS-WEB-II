<?php

namespace App\Controllers;
use App\Models\BiodataModel;

class KuisionerBiodata extends BaseController
{
    public function index(): string
    {
        return view('kuisioner_biodata');
    }

    public function create()
    {
        // jika data valid, simpan ke database
            $biodata = new BiodataModel();
            $biodata->insert([
                //"namaLengkap" => $this->request->getPost('namaLengkap'),
                "namaLengkap" => "User",
                //"NIM" => $this->request->getPost('NIM'),
                "NIM" => "2210817310001",
                //"programStudi" => $this->request->getPost('programStudi'),
                "programStudi" => "Teknologi Informasi",
                //"noHandphone" => $this->request->getPost('noHandphone'),
                "noHandphone" => "089692601314",
                "semester" => $this->request->getPost('semester'),
                "tahunAkademik" => $this->request->getPost('tahunAkademik'),
                "domisili" => $this->request->getPost('domisili')
            ]);
            return redirect('kuisioner_visi_misi');
		
    }
}
