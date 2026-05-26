<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "2526-27db"; // Sudah disesuaikan dengan nama database di phpMyAdmin kamu

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi ke database kecantikan gagal: " . mysqli_connect_error());
}
?>