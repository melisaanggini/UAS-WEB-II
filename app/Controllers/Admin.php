<?php

namespace App\Controllers;
use App\Models\BiodataModel;

class Admin extends BaseController
{
    public function index(): string
    {
        $biodata = new BiodataModel();
        $data = $biodata->ambil_data();

        return view('admin', compact('data'));
    }

    public function delete($id){
        $biodata = new BiodataModel();
        $biodata->delete($id);
        echo view('/dashboard');
    }

}
