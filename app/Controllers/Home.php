<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if(in_groups('admin'))return redirect()->to(base_url('admin'));
        if(in_groups('customer'))return redirect()->to(base_url('dashboard_cust'));
        if(in_groups('kasir'))return redirect()->to(base_url('dashboard_kasir'));
        return view('auth/login',[
            'config' => config('Auth')
        ]);
    }
    public function redirect(){
        if(in_groups("admin")){
            return redirect()->to('/admin');
        }else if(in_groups("customer")){
            return redirect()->to('/dashboard_cust');
        }else{
            return redirect()->to('/dashboard_kasir');
        }
    }

    public function register(){
        return view('auth/register',[
            'config' => config('Auth')
        ]);
    }
}
