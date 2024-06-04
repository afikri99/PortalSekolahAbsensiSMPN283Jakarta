<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SiswaModel;

class SiswaController extends Controller
{
    public function index(){
        $data['title']  = "Siswa";
        $data['query']  = SiswaModel::get();
        return view('siswa.index',$data);

    }
}
