<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function __construct() {
        $this->session = \Config\Services::session();
    }

    public function index() {
        if (!$this->session->has('username')) {
            return redirect()->to('login');
        }

        return view('dashboard');
    }
}
