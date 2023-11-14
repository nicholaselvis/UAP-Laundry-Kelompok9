<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CustController extends BaseController
{
    public function index()
    {
        return view('dashboard_cust');
    }

    public function riwayat(){
        return view('riwayat_cust');
    }

    public function form1(){
        return view('form1_cust');
    }
    
    public function form2(){
        return view('form2_cust');
    }
}
