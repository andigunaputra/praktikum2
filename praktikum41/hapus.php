<?php
include 'config.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM donasi WHERE id='$id'");

header("Location: dashboard.php");
?>