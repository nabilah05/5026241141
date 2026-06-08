<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Kuliah</title>
</head>
<body>

    <h2>Data Nilai Kuliah</h2>

    <a href="/tambah">
        <button>Tambah Data</button>
    </a>

    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @foreach($data as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->nrp }}</td>
            <td>{{ $d->nilaiangka }}</td>
            <td>{{ $d->sks }}</td>

            <td>
                @if($d->nilaiangka <= 40)
                    D
                @elseif($d->nilaiangka >= 41 && $d->nilaiangka <= 60)
                    C
                @elseif($d->nilaiangka >= 61 && $d->nilaiangka <= 80)
                    B
                @else
                    A
                @endif
            </td>

            <td>{{ $d->nilaiangka * $d->sks }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>