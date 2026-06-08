<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Nilai Kuliah</title>
</head>
<body>

    <h2>Tambah Data Nilai Kuliah</h2>

    <form action="/store" method="POST">
        @csrf

        <table>
            <tr>
                <td>NRP</td>
                <td>
                    <input type="text" name="nrp" required>
                </td>
            </tr>

            <tr>
                <td>Nilai Angka</td>
                <td>
                    <input type="text" name="nilaiangka" required>
                </td>
            </tr>

            <tr>
                <td>SKS</td>
                <td>
                    <input type="text" name="sks" required>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>

    </form>

</body>
</html>