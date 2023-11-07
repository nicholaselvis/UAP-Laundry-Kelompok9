<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('dashboard_admin');
    }

    public function stok()
    {
        return view('stok');
    }

    public function kasir()
    {
        return view('kasir');
    }
}
