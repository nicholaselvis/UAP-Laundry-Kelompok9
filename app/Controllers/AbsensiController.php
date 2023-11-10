<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AbsensiController extends BaseController
{
    public function index()
    {
        return view("absensi_kasir");
    }
    public function store()
    {
        $data =[
            'nama' => $this->request->getVar('nama'),
            'tanggal' => $this->request->getVar('tanggal'),
            'jam' => $this->request->getVar('jam'),
        ];     
        return view("absensi_kasir", $data);
    }
}
