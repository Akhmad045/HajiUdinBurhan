<?php

namespace App\Http\Controllers;


use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function admin(){
        //$a = new Petugas();
        return view('Admin.utama');
    }
    public function validasi(){
        $lapor = new Pengaduan;
        return view('Admin.validasi',['data'=>$lapor->all()]);

    }
    public function tanggapan(){
        $tanggap = new Tanggapan;
         return view();
    }
}