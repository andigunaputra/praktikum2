<?php
session_start();
include 'config.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<h2>Dashboard ReShare</h2>
<p>Halo, <?= $_SESSION['username']; ?> 👋</p>

<a href="tambah.php">+ Tambah Donasi</a> |
<a href="logout.php">Logout</a>

<br><br>

<table border="1">
<tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Kategori</th>
    <th>Kondisi</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM donasi");

while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $d['nama_barang'] ?></td>
    <td><?= $d['kategori'] ?></td>
    <td><?= $d['kondisi'] ?></td>
    <td><?= $d['alamat'] ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $d['id'] ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>