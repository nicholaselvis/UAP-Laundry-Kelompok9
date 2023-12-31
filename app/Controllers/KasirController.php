<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KasirModel;
use App\Models\MesinModel;
use App\Models\TransaksiModel;

class KasirController extends BaseController
{
    public $kasirModel;
    public $transaksiModel;
    public $mesinModel;

    public function __construct(){

        $this->kasirModel = new KasirModel();
        $this->transaksiModel = new TransaksiModel();
        $this->mesinModel = new MesinModel();

    }
    public function index()
    {   
        $data = [
            'mesin_cuci' => $this->mesinModel->getAllMesin()
        ];
        // dd($data);
        return view("dashboard_kasir", $data);
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


