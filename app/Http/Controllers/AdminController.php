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
        $tanggap = new Pengaduan;
        return view('Admin.utama',['tanggapi'=>$tanggap->all()]);
    }
    public function validasi(){
        $lapor = new Pengaduan;
        return view('Admin.validasi',['data'=>$lapor->all()]);

    }
    public function status($id){
        $lapor = new Pengaduan;
        $lapor->find($id)->update(['status'=>'proses']);
        return back();

    }
    public function tanggapan(){
        $tanggap = new Pengaduan;
         return view('Admin.Tanggapan',['tanggapi'=>$tanggap->all()]);
    }
    public function ceklogin(){
        return view('Admin.login');
    }
    public function celogin(Request $request){
        $cek = new Petugas();
        $cek = $cek->where('username',$request->input('username'))->where('password',$request->input('password'));

        if($cek->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>($request->input('password'))
            ]);
            return redirect('/admin/utama');
        }
        return back()->with('pesan','username atau password salah');
    }
    public function registrasi(){
        return view('Admin.registrasiadmin');
    }
    public function registrasi_admin(Request $request){
        $m = new Petugas();
        $cek = $request->validate([
            'nama_petugas'=>'required|max:16',
            'username'=>'required|min:6',
            'password'=>'required|min:4',
            'telp'=>'required|max:13'
        ]);
        $m->create($request->all());
        if ($m->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('admin/registrasi')->with('pesan','Selamat, petugas berhasil ditambahkan');
        }
    }
    public function logout(){
        session()->flush();
        return redirect('/admin/login');
    }
    public function form(){
        return view('Admin.formtanggapan');
    }
    public function forml(Request $request){
        
    }
}