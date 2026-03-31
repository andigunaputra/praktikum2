<?php
// Konfigurasi database
$host = "localhost"; // host tempat lokasi database dapat diganti dengan alamat server yang akan digunakan
$username = "root";  // username dari database
$password = "";      // password dari database
$database = "modul_webpro"; // Nama database/schema yang ingin digunakan

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST["NIM"];
        $Nama = $_POST["Nama"];
        $Jurusan = $_POST["Jurusan"];

        // Query untuk memasukkan data
        $sql = "INSERT INTO Data_Mahasiswa (NIM, Nama, Jurusan) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $NIM, $Nama, $Jurusan);

        if ($stmt->execute()) {
            header("Location: index.html");
            exit();
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
    }
}

$conn->close();
?>