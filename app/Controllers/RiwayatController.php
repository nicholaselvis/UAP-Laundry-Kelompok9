<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RiwayatController extends BaseController
{
    public function index()
    {
        return view("riwayat_transaksi");
    }
}
