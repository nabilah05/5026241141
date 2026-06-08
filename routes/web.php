<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\NilaikuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang </h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');

});
Route::get('pertemuan1', function () {
    return view('pertemuan1');
});

Route::get('pertemuan2', function () {
    return view('pertemuan2');
});

Route::get('pertemuan3', function () {
    return view('pertemuan3');
});

Route::get('template', function () {
    return view('template');
});

Route::get('tugaspertemuan3', function () {
    return view('tugas3');
});

Route::get('pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('pertemuan5index', function () {
    return view('pertemuan5index');
});

Route::get('pertemuan5makeoverig', function () {
    return view('pertemuan5makeoverig');
});

Route::get('tugaspertemuan5linktree', function () {
    return view('tugas5linktree');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud
Route::get('pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//latihan eas
Route::get('/', [NilaikuliahController::class, 'index']);
Route::get('/tambah', [NilaikuliahController::class, 'tambah']);
Route::post('/store', [NilaikuliahController::class, 'store']);