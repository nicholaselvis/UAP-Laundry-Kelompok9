<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KasirController extends BaseController
{
    public function index()
    {
        return view("dashboard_kasir");
    }
    public function create(){

        
        return view("");
    }
}


