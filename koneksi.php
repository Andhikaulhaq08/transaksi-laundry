<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "uts_312310782";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>