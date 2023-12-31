<?php

namespace App\Controllers;

use App\Models\TransaksiModel;
use App\Models\KasirModel;
use App\Controllers\BaseController;
use CodeIgniter\Commands\Utilities\Publish;

class AdminController extends BaseController
{
   

    protected $helpers=['Form'];

    public function __construct()
    {
       
        $this->kasirModel = new KasirModel();
        $this->transaksiModel = new TransaksiModel();
    }

    public function index()
    {
        $jumlahkasir = $this->kasirModel->get()->resultID->num_rows;
        $jumlahtransaksi = $this->transaksiModel->get()->resultID->num_rows;

        $data =[
            'jumlahkasir' => $jumlahkasir,
            'jumlahtransaksi' => $jumlahtransaksi
        ];

        return view('dashboard_admin', $data);
    }

    //kasir
    public function kasir()
    {
        $kasirModel = new KasirModel();

        $kasir = $kasirModel->getKasir();

        $data = [
            'title' => 'Kasir',
            'kasir'  => $this->kasirModel->getKasir(),
        ];

        return view('kasir', $data);
    }

    public function kasirstore()
    {
        $data = [
            
            'nama' => $this->request->getVar('nama'),
            'umur' => $this->request->getVar('umur'),
            'jeniskelamin' => $this->request->getVar('jeniskelamin'),
        ];
    
        $this->kasirModel->saveKasir($data);
        return redirect()->to('/admin/kasir');
    }

    public function create_kasir()
    {
        $kasir = $this->kasirModel->getKasir();

        $data = [  
            'nama' => $this->request->getVar('nama'),
            'umur' => $this->request->getVar('umur'),
            'jeniskelamin' => $this->request->getVar('jeniskelamin'),
        ];

        return view('tambah_kasir', $data);
    }

    public function edit_kasir($id)
    {
        $kasir = $this->kasirModel->getKasir($id);

        $data = [
            'title' => 'Edit Kasir',
            'kasir' => $kasir,
        ];
        //dd($this->request->getVar());

        return view('edit_kasir', $data);
    }

    public function updateKasir($id)
    {

        $data = [  
            'nama' => $this->request->getVar('nama'),
            'umur' => $this->request->getVar('umur'),
            'jeniskelamin' => $this->request->getVar('jeniskelamin'),
        ];

        $result = $this->kasirModel->updateKasir($data, $id);

        if(!$result)
        {
            return redirect()->back()->withInput()
                ->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/admin/kasir'));
    }

    public function destroyKasir($id)
    {
        $result = $this->kasirModel->deleteKasir($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal menghapus data');
        }
        return redirect()->to(base_url('/admin/kasir'))
            ->with('success', 'Berhasil menghapus data');
    }
}

