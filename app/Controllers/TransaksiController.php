<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use App\Models\TransaksiModelModel;

class TransaksiController extends BaseController{
    public $transaksiModel;
    public function __construct(){
        $this->transaksiModel = new TransaksiModel();
    }
    public function index(){
        return view("bill_cust");
    }
    public function store(){
        $data = [
            'nama' => $this->request->getPost('nama'),
            'no_wa' => $this->request->getPost('no_wa'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jenis_layanan' => $this->request->getPost('jenis_layanan'),
            'total_kapasitas_laundry' => $this->request->getPost('total_kapasitas_laundry'),
            'total_transaksi_laundry' => $this->request->getPost('total_transaksi_laundry'),
        ];
        $datas = $this->request->getPost();
        // dd($datas);
        $this->db->table('transaksi_laundry')->insert($datas);
       
        if( $this->db->affectedRows() > 0) {        
            session()->set('form_data', $datas);
            // Redirect back to the original page
        }


        // Store form data in session
        session()->set('form_data', $data);

        // Redirect back to the original page
        return redirect()->to(site_url('bill_cust'))->with('form_data', $data);
        
    }

    public function create(){
        $data = [
            'nama' => $nama,
            'no_wa' => $no_wa,
            'tanggal' => $tanggal,
            'jenis_layanan' => $jenis_layanan,
            'total_kapasitas_laundry' => $total_kapasitas_laundry,
            'total_transaksi_laundry' => $total_transaksi_laundry,
        ];

        return view('bill_cust', $data);
    }

    public function show(){

        $transaksi_cust = $this->transaksiModel->getAllUser();

        $data = [
            'transaksi_cust' => $this->transaksiModel->getAllUser()
        ];
        
        return view('bill_cust', $data);
    }
}