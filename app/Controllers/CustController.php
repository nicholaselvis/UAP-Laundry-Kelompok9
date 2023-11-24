<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Migrations\Customer;
use App\Models\TransaksiModel;
use App\Models\CustomerModel;

class CustController extends BaseController
{
    public $transaksiModel;
    public function __construct(){
        $this->transaksiModel = new TransaksiModel();
    }

    public function index()
    {
        return view('dashboard_cust');
    }

    public function riwayat(){
        $transaksi = new TransaksiModel();
        $data = $transaksi->getUserTransaksi(1);
        //dd($data);
        return view('riwayat_cust',['data' => $data]);
    }

    public function form1(){
        $cust = new CustomerModel();
        $data = [
            // 'title' => 'List User',
            'cust' => $cust->getAllCustomers(),
        ];
        //dd($data);
        return view('form1_cust',$data);
    }
    
    public function form2(){
        return view('form2_cust');
    }

    public function transaksiberhasil_cust(){
       
        return view('transaksiberhasil_cust');
    }
    public function bill_cust(){
       
        $totalTrans = ($this->request->getPost('total_kapasitas_laundry')==1)? 10000 : 15000 ;
        $id = $this->request->getPost('id_customer');
        $user = new CustomerModel();
        $user = $user->getCustomer($id);
        //dd($user);
        $data = [
            'id_customer' => $id,
            'tanggal_booking' => $this->request->getPost('tanggal_booking'),
            'id_jenis_layanan' => $this->request->getPost('jl'),
            'waktu' => $this->request->getPost('waktu'),
            'kapasitas_pesanan' => $this->request->getPost('total_kapasitas_laundry'),
            'total_transaksi' => $totalTrans,
            'nama_customer' => $user['nama_customer'],
            'no_wa' => $user['no_wa'],
        ];
       
       // // dd($datas);
        //dd($data);
        
        
        $transaksi = new TransaksiModel();
        $transaksi = $transaksi->createTransaksi($data);
        
        return view('bill_cust',['data' => $data]);
    }

    public function create(){
        //
    }
}