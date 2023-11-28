<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KasirModel;
use App\Models\TransaksiModel;

class KasirController extends BaseController
{
    public $kasirModel;
    public $transaksiModel;
    public function __construct(){
        $this->kasirModel = new KasirModel();
        $this->transaksiModel = new TransaksiModel();
    }
    public function index()
<<<<<<< HEAD
    {   
        $data = [
            'mesin_cuci' => $this->kasirModel->getAllMesin()
        ];
        return view("dashboard_kasir", $data);
=======
    {
        $today = date("Y-m-d");
        $transaksi = new TransaksiModel();
        $data = $transaksi->getTransaksiByTanggal($today);
        return view("dashboard_kasir",['data' => $data]);
    }
    public function create(){

        
        return view("");
>>>>>>> 0173998503fdcec80d63e5159007c9762439c165
    }
    public function create(){

        
        return view("");
    }

    function mesin_cuci($id){
        
        $data = [
            'mesin_cuci' => $this->transaksiModel->getUserTransaksi($id)
        ];
        
        // return view('detail_kelas', $data);   
        // dd($data);  
        return view('mesin_cuci', $data);
    }
}


