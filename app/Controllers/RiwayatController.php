<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;

class RiwayatController extends BaseController
{
    public $transaksiModel;
    public function __construct(){
        $this->transaksiModel = new TransaksiModel();
    }
    public function index()

    {   
        $transaksi = new TransaksiModel();
        $data = $transaksi->getTransaksi();
        //dd($data);
        return view("riwayat_transaksi",['data' => $data]);

    {
        // $today = date("Y-m-d");
        // $transaksi = new TransaksiModel();
        // $data = $transaksi->getTransaksiByTanggal($today);
        // return view("riwayat_transaksi", ['data' => $data]);
        $data = [
            'transaksi' => $this->transaksiModel->getUserTransaksi()
        ];

        return view('riwayat_transaksi', $data);

    }
       
}

}

