<?php
$conn = new mysqli("localhost", "root", "", "db_mahasiswa");
$result = $conn->query("SELECT * FROM mahasiswa");
?>

<table border="1">
<tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jurusan</th>
</tr>

<?php while($row = $result->fetch_assoc()){ ?>
<tr>
    <td><?php echo $row['nim']; ?></td>
    <td><?php echo $row['nama']; ?></td>
    <td><?php echo $row['jurusan']; ?></td>
</tr>
<?php } ?>
</table>