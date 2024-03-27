<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Form Biodata Mahasiswa</h1>
    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat"><br>
        <label for="hobi">Hobi:</label><br>
        <input type="text" id="hobi" name="hobi"><br><br>
        <button type="submit">Simpan</button>
    </form>

    <h1>Data Mahasiswa</h1>

</body>

<form action="/tampilkan" method="get">
    <button type="submit">Tampilkan</button>
</form>

@if(isset($mahasiswas))
<table border="1">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
            <td>{{ $mahasiswa->hobi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif



</html>
