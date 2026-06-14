@extends('template')

@section('title', 'Data Agen')

@section('konten')

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Agen</th>
        <th>Nama Agen</th>
        <th>Jumlah Agen</th>
        <th>Tersedia</th>
    </tr>

    @foreach ($agen as $a)
    <tr>
        <td>{{ $a->kodeagen }}</td>
        <td>{{ $a->namaagen }}</td>
        <td>{{ $a->jumlahagen }}</td>
        <td>{{ $a->tersedia }}</td>
    </tr>
    @endforeach

</table>

<a href="/agen/tambah" class="btn btn-primary">
    Tambah Agen
</a>

@endsection