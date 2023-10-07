<?php

namespace App\Http\Controllers;


use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function admin(){
        //$a = new Petugas();
        return view('Admin.utama');
    }
    public function validasi(){
        return view('Admin.validasi');
    }
}