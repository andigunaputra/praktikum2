<?php
include 'config.php';
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM donasi WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<h2>Edit Donasi</h2>

<form method="POST">
    Nama Barang: <input type="text" name="nama" value="<?= $d['nama_barang'] ?>"><br>
    Kategori: <input type="text" name="kategori" value="<?= $d['kategori'] ?>"><br>
    Kondisi: <input type="text" name="kondisi" value="<?= $d['kondisi'] ?>"><br>
    Alamat: <textarea name="alamat"><?= $d['alamat'] ?></textarea><br>

    <button name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE donasi SET
        nama_barang='$_POST[nama]',
        kategori='$_POST[kategori]',
        kondisi='$_POST[kondisi]',
        alamat='$_POST[alamat]'
        WHERE id='$id'
    ");

    header("Location: dashboard.php");
}
?>