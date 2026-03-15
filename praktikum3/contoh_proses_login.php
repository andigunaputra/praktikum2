<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi apakah input kosong
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo "Username dan Password wajib diisi!";
    } else {
        $username = htmlspecialchars($_POST["username"]); // Mencegah XSS
        $password = $_POST["password"];
        
        // Contoh validasi sederhana
        if ($username == "admin" && $password == "12345") {
            echo "Login Berhasil! Selamat datang, " . $username;
        } else {
            echo "Username atau Password salah.";
        }
    }
}
?>
