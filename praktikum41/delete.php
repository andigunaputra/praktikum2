<?php
$conn = new mysqli("localhost", "root", "", "db_mahasiswa");

$conn->query("DELETE FROM mahasiswa WHERE nim='123'");
echo "Data berhasil dihapus";
?>