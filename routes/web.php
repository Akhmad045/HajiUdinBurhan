<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
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


Route::get('/',function(){
    return view ('welcome');
});

// data masyrakat
route::get('masyarakat',[MasyarakatController::class,'index']);

// dashboard masyarakat
route::get('dashboard',[MasyarakatController::class,'dashboard']);

// dashboard admin
route::get('dashboard/utama',[AdminController::class,'admin']);

// registrasi
route::get('registrasi',[MasyarakatController::class,'registrasi']);
route::post('data',[MasyarakatController::class,'data']);

// login
route::get('login',[MasyarakatController::class,'login']);
route::post('login',[MasyarakatController::class,'ceklogin']);

// laporan
route::get('laporan',[MasyarakatController::class,'laporan']);
route::post('laporan',[MasyarakatController::class,'laporan']);

//validasi
route::get('dashboard/validasi',[AdminController::class,'validasi']);