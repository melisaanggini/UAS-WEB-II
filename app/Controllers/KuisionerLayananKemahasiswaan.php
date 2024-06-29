<?php

namespace App\Controllers;

class KuisionerLayananKemahasiswaan extends BaseController
{
    public function index(): string
    {
        return view('kuisioner_layanan_kemahasiswaan');
    }
}
