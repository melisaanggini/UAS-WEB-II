<?php

namespace App\Controllers;

class Kuisione extends BaseController
{
    public function index(): string
    {
        return view('kuisioner_selesai');
    }
}
