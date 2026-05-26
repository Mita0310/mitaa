<?php
$host = "localhost";
$user = "2526_27";
$pass = "12345678";
$db   = "2526_27db"; // Sudah disesuaikan dengan nama database di phpMyAdmin kamu

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi ke database kecantikan gagal: " . mysqli_connect_error());
}
?>