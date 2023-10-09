<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Buat route ke halaman profil
Route::get("/profil",function(){
    return view ("profile");
});

//Route dengan parameter (wajib)
Route::get("/mahasiswa/{nama}", function($nama = "Rafli"){
    echo "<h1>Halo Nama Saya $nama</h2>";
});

//Route dengan parameter (tidak wajib)
Route::get("/mahasiswa2/{nama?}", function($nama = "Rafli"){
    echo "<h1>Halo Nama Saya $nama</h2>";
});

//Route dengan parameter > 1
Route::get("/profil/{nama?}/{pekerjaan?}", function($nama = "Rafli", $pekerjaan = "Mahasiswa"){
    echo "<h1>Halo Nama Saya $nama. Saya Adalah $pekerjaan</h2>";
});

