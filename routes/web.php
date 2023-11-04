<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\MasyarakatMiddleware;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// data masyrakat
route::get('masyarakat', [MasyarakatController::class, 'index']);
// grup  masyarakat
route::prefix('masyarakat')->group(function () {
    // dashboard masyarakat
    route::get('dashboard', [MasyarakatController::class, 'dashboard']);
    // registrasi
    route::get('registrasi', [MasyarakatController::class, 'registrasi']);
    route::post('registrasi', [MasyarakatController::class, 'data']);
    // laporan
    route::get('laporan', [MasyarakatController::class, 'buatlaporan']);
    route::post('laporan', [MasyarakatController::class, 'laporan']);
    // login
    route::get('login', [MasyarakatController::class, 'login']);
    route::post('login', [MasyarakatController::class, 'ceklogin']);
    // halaman sesudah login
    route::get('dashboardl',[MasyarakatController::class,'dash']);
    // logout
    route::get('logout',[MasyarakatController::class,'logout']);
    

});
route::prefix('admin')->group(function () {
    // dashboard admin
    route::get('utama',[AdminController::class,'dashboard']);
    //->middleware(AdminMiddleware::class);
    //validasi
    route::get('validasi', [AdminController::class, 'validasi']);
    route::get('status/{id}', [AdminController::class, 'status']);
    //tanggapan
    route::get('tanggapan', [AdminController::class, 'tanggapan']);
    route::post('tanggapan', [AdminController::class, 'tanggapan']);
    // registrasi admin dan petugas
    route::get('registrasi', [AdminController::class,'registrasi']);
    route::post('registrasi', [AdminController::class,'registrasi_admin']);
    //login admin
    route::post('login', [AdminController::class, 'celogin']);  
    route::get('login', [AdminController::class, 'ceklogin']);
    // logout
    route::get('logout',[AdminController::class,'logout']);
    //formtanggapan
    route::get('formtanggapan',[AdminController::class,'form']);
    route::post('formtanggapan',[AdminController::class,'forml']);
});
