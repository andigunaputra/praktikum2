<?php
$conn = mysqli_connect("localhost", "root", "", "reshare");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>