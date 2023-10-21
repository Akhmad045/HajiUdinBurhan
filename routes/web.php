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
    Route::get('/',function(){
        return view('masyarakat.dashboard');
    })->middleware(MasyarakatMiddleware::class);
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
    

});
route::prefix('admin')->group(function () {
    route::get('/',function(){
        return view('admin.utama');
    })->middleware(AdminMiddleware::class);
    // dashboard admin
    route::get('utama',[AdminController::class,'dashboard']);
    //validasi
    route::get('validasi', [AdminController::class, 'validasi']);
    //tanggapan
    route::get('tanggapan', [AdminController::class, 'tanggapan']);
    route::post('tanggapan', [AdminController::class, 'tanggapan']);
    //login admin
    route::post('login', [AdminController::class, 'celogin']);  
    route::get('login', [AdminController::class, 'ceklogin']);
});
