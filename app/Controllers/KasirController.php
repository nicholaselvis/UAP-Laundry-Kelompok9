<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;

class KasirController extends BaseController
{
    public function index()
    {
        $today = date("Y-m-d");
        $transaksi = new TransaksiModel();
        $data = $transaksi->getTransaksiByTanggal($today);
        return view("dashboard_kasir",['data' => $data]);
    }
    public function create(){

        
        return view("");
    }
    public function create(){

        
        return view("");
    }
}


