<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi apakah input kosong
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo "<script>alert('Username dan Password wajib diisi!'); window.location.href='login.php';</script>";
    } else {
        // Mengambil data dari form
        $username = htmlspecialchars($_POST["username"]); 
        $password = $_POST["password"];
        
        // Contoh validasi sederhana
        if ($username == "admin" && $password == "12345") {
            // Jika berhasil, arahkan ke home.html atau home.php
            echo "Login Berhasil! Selamat datang, " . $username;
            // header("Location: home.php"); // Aktifkan ini jika ingin otomatis pindah halaman
        } else {
            echo "Username atau Password salah. <a href='login.php'>Kembali</a>";
        }
    }
} else {
    // Jika mencoba akses file ini tanpa POST, arahkan balik ke login
    header("Location: login.php");
}
?>