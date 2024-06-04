<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\KelasModel;
class KelasController extends Controller
{
    public function index(){
        $data['title']  = "Kelas";
        $data['query']  = KelasModel::get();
        return view('kelas.index',$data);

    }
}
