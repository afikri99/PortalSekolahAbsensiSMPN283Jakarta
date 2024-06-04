<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['title']      = "Dashboard";
        $data['welcome']    = "Selamat Datang";
        return view('dashboard.index',$data); 
    }
}
