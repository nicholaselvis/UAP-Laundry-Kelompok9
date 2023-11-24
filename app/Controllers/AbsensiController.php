<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AbsensiModel;

class AbsensiController extends BaseController
{
    public $absensiModel;
    public function __construct(){
        $this->absensiModel = new AbsensiModel();
    }
    public function index()
    {
        return view("absensi_kasir");
    }
    public function store()
    {
        // $builder = $this->db->table("absensi");
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tanggal' => $this->request->getPost('tanggal'),
            'time' => $this->request->getPost('time'),
            'foto' => $this->request->getPost('foto'),
        ];
        $datas = $this->request->getPost();
        // dd($datas);
        $this->db->table('absensi')->insert($datas);
       
        if( $this->db->affectedRows() > 0) {        
            session()->set('form_data', $datas);
            // Redirect back to the original page

        }


        // Store form data in session
        session()->set('form_data', $data);

        // Redirect back to the original page
        return redirect()->to(site_url('absensi_kasir'))->with('form_data', $data);
        
    }

    public function show(){

        $absensi = $this->absensiModel->getAllUser();

        $data = [
            'absensi' => $this->absensiModel->getAllUser()
        ];
        

        return view('absensi_kasir', $data);
    }
}
