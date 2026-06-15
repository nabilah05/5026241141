@extends('template')

@section('title', 'Tambah Data Nilai Peserta')

@section('konten')

<h2>Tambah Data Nilai Peserta</h2>

<a href="/eas" class="btn btn-info">Kembali</a>

<br><br>

<form action="/eas/store" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">No Peserta</label>
        <input type="text" name="nopeserta" required class="form-control">
    </div>

    <br>

    <div class="mb-3">
        <label class="form-label">Nilai Teori</label>
        <input type="text" name="nilaiteori" required class="form-control">
    </div>

    <br>

    <div class="mb-3">
        <label class="form-label">Nilai Praktek</label>
        <input type="text" name="nilaipraktek" required class="form-control">
    </div>

    <br>

    <input type="submit" value="Simpan Data" class="btn btn-success">

</form>

@endsection