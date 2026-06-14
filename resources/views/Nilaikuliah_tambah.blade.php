@extends('template')

@section('title', 'Tambah Data Nilai Kuliah')

@section('konten')

<h2>Tambah Data Nilai Kuliah</h2>

<a href="/nilaikuliah" class="btn btn-info">Kembali</a>

<br><br>

<form action="/store" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">NRP</label>
        <input type="text" name="nrp" required class="form-control">
    </div>

    <br>

    <div class="mb-3">
        <label class="form-label">Nilai Angka</label>
        <input type="text" name="nilaiangka" required class="form-control">
    </div>

    <br>

    <div class="mb-3">
        <label class="form-label">SKS</label>
        <input type="text" name="sks" required class="form-control">
    </div>

    <br>

    <input type="submit" value="Simpan Data" class="btn btn-success">

</form>

@endsection