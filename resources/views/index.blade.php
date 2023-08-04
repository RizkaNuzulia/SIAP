<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Arsip</h1>
    <h1 class="judul">Data Arsip</h1>

    <a href="/arsip/tambah"> + Tambah Arsip</a>

    <br>
    <br>

    <table border="1">
        <tr>
            <th>Kode</th>
            <th>Dokumen</th>
            <th>Perkara</th>
        </tr>
        @foreach($arsip as $a)
        <tr>
            <td>{{ $a->kode }}</td>
            <td>{{ $a->Dokumen}}</td>
            <td>{{ $a->Perkara }}</td>
            <td>
                <a href="/arsip/edit/{{ $a->kode }}">Edit</a>
                <a href="/arsip/hapus/{{ $a->kode }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>