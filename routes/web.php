<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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

