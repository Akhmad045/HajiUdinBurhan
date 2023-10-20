<?php

namespace App\Http\Controllers;


use App\Models\Masyarakat;
use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function dashboard(){
        //$a = new Petugas();
        return view('Admin.utama');
    }
    public function validasi(){
        $lapor = new Pengaduan;
        return view('Admin.validasi',['data'=>$lapor->all()]);

    }
    public function tanggapan(){
        $tanggap = new Pengaduan;
         return view('Admin.Tanggapan',['tanggapi'=>$tanggap->all()]);
    }
    public function celogin(Request $request){
        $cek = new Petugas();
        $cek = $cek->where('username',$request->input('username'))->where('password',$request->input('password'));

        if($cek->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>($request->input('password'))
            ]);
            return redirect('admin/utama');
        }
        return back();
    }
}