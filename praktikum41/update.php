<?php
$conn = new mysqli("localhost", "root", "", "db_mahasiswa");

$conn->query("UPDATE mahasiswa SET nama='Budi' WHERE nim='123'");
echo "Data berhasil diupdate";
?>  