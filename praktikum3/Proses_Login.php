<?php
// Mengecek apakah data dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Ambil data dari form login
    // htmlspecialchars digunakan untuk keamanan (mencegah XSS)
    $username = htmlspecialchars($_POST["username"]);
    $password = $_POST["password"];

    // 2. Validasi: Cek apakah input kosong
    if (empty($username) || empty($password)) {
        echo "<script>
                alert('Username dan Password tidak boleh kosong!');
                window.location.href = 'login.php';
              </script>";
    } else {
        
        // 3. Pengecekan Kredensial (Contoh Sederhana)
        // Di dunia nyata, bagian ini akan mengecek ke Database
        if ($username == "admin" && $password == "12345") {
            
            // Jika login berhasil
            echo "<script>
                    alert('Login Berhasil! Selamat datang, " . $username . "');
                    window.location.href = 'home.html'; 
                  </script>";
                  
        } else {
            
            // Jika login gagal (username atau password salah)
            echo "<script>
                    alert('Username atau Password salah!');
                    window.location.href = 'login.php';
                  </script>";
        }
    }

} else {
    // Jika user mencoba akses file ini secara langsung tanpa lewat form login
    header("Location: login.php");
    exit();
}
?>