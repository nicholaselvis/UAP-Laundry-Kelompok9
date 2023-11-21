<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;

class RiwayatController extends BaseController
{
    public function index()
    {   
        $transaksi = new TransaksiModel();
        $data = $transaksi->getTransaksi();
        //dd($data);
        return view("riwayat_transaksi",['data' => $data]);
    }
}
