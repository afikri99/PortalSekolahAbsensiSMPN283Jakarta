<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check() == true) return redirect('/portal/dashboard');
        return view("login");
    }    
    public function proseslogin(Request $request)
    {
        $credentials =  $request -> validate([
            'nip' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/portal/dashboard');
        }
        return back()->with('loginError','Username atau password salah');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
