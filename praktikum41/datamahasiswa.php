<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <!--Menampilkan data mahasiswa dalam tabel-->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'read.php'; ?>
        </tbody>
    </table>
    
    <!--tombol aksi-->
    <br>
    <button onclick="location.href='form.html'">Tambah Data</button>
    <button onclick="location.href='update2.php'">Update Data</button>
    <button onclick="location.href='delete.php'">Hapus Data</button>
</body>
</html>