<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\NilaikuliahController;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiPesertaController;

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
Route::get('/nilaikuliah', [NilaikuliahController::class, 'index']);
Route::get('/tambah', [NilaikuliahController::class, 'tambah']);
Route::post('/store', [NilaikuliahController::class, 'store']);

//crud tabel keranjangbelanja
Route::get('/keranjangbelanja', [keranjangController::class, 'index_keranjang']);
Route::get('/keranjangbeli/{id}', [keranjangController::class, 'beli']);
Route::post('/keranjangstore', [keranjangController::class, 'storeKeranjang']);
Route::get('/keranjangbatal/{id}', [keranjangController::class, 'batal']);

//agen
Route::get('/agen', [AgenController::class,'index']);
Route::get('/agen/tambah', [AgenController::class,'tambah']);
Route::post('/agen/store', [AgenController::class,'store']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//eas
Route::get('/eas', [NilaiPesertaController::class,'index']);
Route::get('/eas/tambah', [NilaiPesertaController::class,'tambah']);
Route::post('/eas/store', [NilaiPesertaController::class,'store']);