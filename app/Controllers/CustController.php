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
}