<?php

namespace App\Controllers;

use App\Models\StokModel;
use App\Controllers\BaseController;
use CodeIgniter\Commands\Utilities\Publish;

class AdminController extends BaseController
{
    public $stokModel;

    protected $helpers=['Form'];

    public function __construct()
    {
        
        $this->stokModel = new StokModel();
    }

    public function index()
    {
        return view('dashboard_admin');
    }


    public function stok()
    {
        $stokModel = new StokModel();

        $stok = $stokModel->getStok();

        $data = [
            'title' => 'Stok Barang',
            'stok'  => $this->stokModel->getStok(),
        ];


        return view('stok', $data);
    }

    public function kasir()
    {
        return view('kasir');
    }
    public function create_stok()
    {
        $stok = $this->stokModel->getStok();

        $data =[
            
            'nama_barang'   => $this->request->getVar('nama_barang'),
            'jumlah'        => $this->request->getVar('jumlah'),
        ];

        return view('tambah_stok', $data);
    }

    public function store()
    {
        
    
        $data = [
            
            'nama_barang' => $this->request->getVar('nama_barang'),
            'jumlah' => $this->request->getVar('jumlah'),
        ];
    
        $this->stokModel->saveStok($data);
        return redirect()->to('/admin/stok');
    }
}
