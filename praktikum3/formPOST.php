<!DOCTYPE html>
<html>
<head>
    <title>Form POST</title>
</head>
<body>

<h2>Form Input</h2>

<form method="POST" action="">
    Nama: <input type="text" name="nama"><br><br>
    Email: <input type="email" name="email"><br><br>

    <input type="submit" value="Kirim">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    echo "<h3>Data yang Dikirim:</h3>";
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>

</body>
</html>