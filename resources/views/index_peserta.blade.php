@extends('template')

@section('title', '5026241141 Aisyah Nabilah Putri')

@section('konten')

<h2>Data Nilai Peserta</h2>

<a href="/eas/tambah" class="btn btn-primary">
    Tambah Data
</a>

<br><br>

<table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>No Peserta</th>
        <th>Nilai Teori</th>
        <th>Nilai Praktek</th>
        <th>Rata Rata</th>
        <th>Status</th>
    </tr>

    @foreach($data as $d)
    <tr>
        <td>{{ $d->ID }}</td>
        <td>{{ $d->nopeserta }}</td>
        <td>{{ $d->nilaiteori }}</td>
        <td>{{ $d->nilaipraktek }}</td>

        <td>{{ ($d->nilaiteori + $d->nilaipraktek)/2 }}</td>

        <td>
            @if((($d->nilaiteori + $d->nilaipraktek)/2) >= 75)
                <a  class="btn btn-success">Lulus</a>
            @else
                <a  class="btn btn-danger">Gagal</a>
            @endif
        </td>
        
    </tr>
    @endforeach

</table>

@endsection