<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AbsensiController extends BaseController
{
    public function index()
    {
        return view("absensi_kasir");
    }
}
