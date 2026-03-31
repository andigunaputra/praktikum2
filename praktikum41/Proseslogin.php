<?php
session_start();
include 'config.php';

$username = trim($_POST['username']);
$password = trim($_POST['password']);

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' OR email='$username'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "User tidak ditemukan!";
    exit;
}

if ($password != $data['password']) {
    echo "Password salah!";
    exit;
}

// login berhasil
$_SESSION['username'] = $data['username'];
header("Location: dashboard.php");
exit;
?>