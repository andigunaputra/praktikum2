<?php
include 'koneksi.php';
// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {

    // Data yang akan dimasukkan pastikan sesuai kolom database
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];

    // Query untuk memasukkan data
    $sql = "INSERT INTO Data_Mahasiswa (NIM, Nama, Jurusan) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nim, $nama, $jurusan);

    if ($stmt->execute()) {
        echo "Data berhasil ditambahkan";
    } else {
        echo $stmt->error;
    }

    $stmt->close();
}

?>