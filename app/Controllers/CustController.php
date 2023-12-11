<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TransaksiModel;
use App\Models\CustomerModel;

class CustController extends BaseController
{
    public $transaksiModel;

    public function __construct()
    {
        $this->transaksiModel = new TransaksiModel();
    }

    public function index()
    {
        return view('dashboard_cust');
    }

    public function riwayat()
    {
        $transaksi = new TransaksiModel();
        $data = $transaksi->getUserTransaksi(1);
        return view('riwayat_cust', ['data' => $data]);
    }

    public function form1()
    {
        session();

        if(session('validation') != null) {
            $validation = session('validation');
        } else {
            $validation = \Config\Services::validation();
        }

        $cust = new CustomerModel();
        $data = [
            'cust' => $cust->getAllCustomers(),
            'validation' => $validation // Access the validation service
        ];
        return view('form1_cust', $data);
    }

    public function form2()
    {
        return view('form2_cust');
    }

    public function transaksiberhasil_cust()
    {
        return view('transaksiberhasil_cust');
    }

    public function bill_cust()
    {
        // if(!$this->validate([
        //     'id_customer' => 'required',
        //     'tanggal_booking' => 'required',
        //     'waktu' => 'required',
        //     'jl' => 'required|is_unique[transaksi_laundry.id_mesin_cuci]',
        //     'total_kapasitas_laundry' => 'required',
        // ])) {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('/form1/create')->withInput()->with('validation', $validation);
        // }
        // Set validation rules
        $rules = [
            'id_customer' => 'required',
            'tanggal_booking' => 'required',
            'waktu' => 'required',
            'jl' => 'required|in_list[1,2,3,4,5]',
            'total_kapasitas_laundry' => 'required|in_list[1,2,3,4,5]',
        ];

        // Set custom error messages if needed
        $messages = [
            'jl' => [
                'in_list' => 'Please select a valid Mesin Cuci.',
            ],
            'total_kapasitas_laundry' => [
                'in_list' => 'Please select a valid Kapasitas.',
            ],
        ];

        // Run validation
        if (!$this->validate($rules, $messages)) {
            // If validation fails, redirect back to the form with validation errors
            return redirect()->to('/form1')->withInput()->with('validation', $this->validator);
        }

        // Validation passed, proceed with form processing

        $totalTrans = ($this->request->getPost('total_kapasitas_laundry') == 1) ? 10000 :
            (($this->request->getPost('total_kapasitas_laundry') == 2) ? 15000 :
                (($this->request->getPost('total_kapasitas_laundry') == 3) ? 20000 :
                    (($this->request->getPost('total_kapasitas_laundry') == 4) ? 25000 : 30000)));

        $id = $this->request->getPost('id_customer');
        $user = new CustomerModel();
        $user = $user->getCustomer($id);

        $data = [
            'id_customer' => $id,
            'tanggal_booking' => $this->request->getPost('tanggal_booking'),
            'id_mesin_cuci' => $this->request->getPost('jl'),
            'waktu' => $this->request->getPost('waktu'),
            'kapasitas_pesanan' => $this->request->getPost('total_kapasitas_laundry'),
            'total_transaksi' => $totalTrans,
            'nama_customer' => $user['nama_customer'],
            'no_wa' => $user['no_wa'],
        ];

        $transaksi = new TransaksiModel();
        $transaksi = $transaksi->createTransaksi($data);

        return view('bill_cust', ['data' => $data]);
    }

    public function create()
    {
        //
    }
}
