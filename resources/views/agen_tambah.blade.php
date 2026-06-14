@extends('template')

@section('title', 'Tambah Agen')

@section('konten')

<a href="/agen" class="btn btn-info">Kembali</a>

<br><br>

<form action="/agen/store" method="POST">
    {{ csrf_field() }}

    Nama Agen
    <input type="text" name="namaagen" required="required" class="form-control">

    <br>

    Jumlah Agen
    <input type="number" name="jumlahagen" required="required" class="form-control">

    <br>

    Tersedia
    <select name="tersedia" class="form-control">
        <option value="Y">Y</option>
        <option value="N">N</option>
    </select>

    <br>

    <input type="submit" value="Simpan Data" class="btn btn-success">

</form>

@endsection