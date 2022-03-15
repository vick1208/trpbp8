<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCont;
use App\Http\Controllers\GuruCont;
use App\Http\Controllers\SiswaCont;
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
//default
/*Route::get('/', function () {
    return view('welcome');
});*/
//Route untuk fungsi Halaman home dan about
Route::get('/',[HomeCont::class,'index']);
Route::get('/about',[HomeCont::class,'about']);
//Route untuk fungsi CRUD data guru
Route::get('/guru',[GuruCont::class,'dg']);
Route::get('/guru/detail/{id_guru}',[GuruCont::class,'detail']);
Route::get('/guru/tambah',[GuruCont::class,'add']);
Route::post('/guru/simpan',[GuruCont::class,'store']);
Route::get('/guru/hapus/{id_guru}',[GuruCont::class,'delete']);
Route::get('/guru/edit/{id_guru}',[GuruCont::class,'edit']);
Route::post('/guru/ubah',[GuruCont::class,'ubah']);
//Routing untuk fungsi CRUD data siswa
Route::get('/siswa',[SiswaCont::class,'ds']);
Route::get('/siswa/detail/{id_siswa}',[SiswaCont::class,'detail']);
Route::get('/siswa/tambah',[SiswaCont::class,'tambah']);
Route::post('/siswa/simpan',[SiswaCont::class,'simpan']);
Route::get('/siswa/hapus/{id_siswa}',[SiswaCont::class,'hapus']);
Route::get('/siswa/edit/{id_siswa}',[SiswaCont::class,'edit']);
Route::post('/siswa/ubah',[SiswaCont::class,'ubah']);