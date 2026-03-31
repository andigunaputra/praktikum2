<?php include 'config.php'; ?>

<h2>Tambah Donasi</h2>

<form method="POST">
    Nama Barang: <input type="text" name="nama"><br>
    
    Kategori:
    <select name="kategori">
        <option>Pakaian</option>
        <option>Elektronik</option>
        <option>Buku</option>
    </select><br>

    Kondisi:
    <select name="kondisi">
        <option>Baru</option>
        <option>Layak Pakai</option>
    </select><br>

    Alamat: <textarea name="alamat"></textarea><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    mysqli_query($conn, "INSERT INTO donasi VALUES(
        NULL,
        '$_POST[nama]',
        '$_POST[kategori]',
        '$_POST[kondisi]',
        '$_POST[alamat]'
    )");

    header("Location: dashboard.php");
}
?>