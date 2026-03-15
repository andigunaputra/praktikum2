<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
</head>
<body>

<h2>Form Input</h2>

<form method="GET" action="">
    Nama: <input type="text" name="nama" required><br><br>
    Email: <input type="email" name="email" required><br><br>

    <input type="submit" value="Kirim">
</form>

<?php
if(isset($_GET['nama']) && isset($_GET['email'])){
    $nama = htmlspecialchars($_GET['nama']);
    $email = htmlspecialchars($_GET['email']);

    echo "<h3>Hasil Input:</h3>";
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>

</body>
</html>