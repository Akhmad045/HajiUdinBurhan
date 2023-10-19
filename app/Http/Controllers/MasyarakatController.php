<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index(){
        // buat objek 
        $pakdes = new Masyarakat();
        //return view ('Masyarakat.index',['bebas'=>$pakdes->
    }
    public function dashboard(){
        return view('Masyarakat.dashboard');
    }
    
    public function registrasi(){
        // buat objek 
            return view('Masyarakat.registrasi');
    }
    public function data(Request $request){
            // cek data yang dikirimkan
            $tes = $request->validate([
                'nik'=>'required|max:16',
                'nama'=>'required',
                'username'=>'required|min:6',
                'password'=>'required|min:4',
                'telpon'=>'required|max:16'
            ]);


            $akhmad = new Masyarakat();
            $akhmad->create([
                'nik'=>$request->nik,
                'nama'=>$request->nama,
                'username'=>$request->username,
                'password'=>$request->password,
                'telpon'=>$request->telpon,
            ]);
            //return redirect('masyarakat/registrasi');
            return redirect('masyarakat/registrasi')->with('pesan','Selamat, anda sudah berhasil registrasi');
    }
    public function login(){
        // buat objek
        return view('Masyarakat.login');
    }
    public function ceklogin(Request $request){
         $raden = new Masyarakat();
         // cek username dan password exists (ada) di tabel masyarakat
         if($raden->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            session([
                'username'=>$request->input('username'),
                'password'=>($request->input('password'))
            ]);
            return redirect('/masyarakat');
         }
         return back()->with('pesan','username atau password salah');
         
    }

    public function buatlaporan(){
        return view('Masyarakat.laporan');
    }

    public function laporan(Request $request){
        // cek data yang dikirimkan
        $tes = $request->validate([
            'nik'=>'required|max:16',
            'tanggal_pengaduan'=>'required|date',
            'foto'=>'required',
            'isi_laporan'=>'required'
        ]);

        // // upload image
        // $image = $request->file('foto');
        // $image->storeAs('public/posts', $image->hashName());

        $akhmad = new Pengaduan();
        $akhmad->create([
            'nik'=>$request->nik,
            'tanggal_pengaduan'=>$request->tanggal_pengaduan,
            'foto'=>$request->foto,
            'isi_laporan'=>$request->isi_laporan
        ]);
        //return redirect('masyarakat/registrasi');
        return redirect('masyarakat/laporan')->with('pesan','Laporan berhasil dikirim');
    }
}
