<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['simpan'])) {
    $nama          = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kelas         = mysqli_real_escape_string($koneksi, $_POST['kelas']);
    $tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $username      = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email         = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password      = mysqli_real_escape_string($koneksi, $_POST['password']);
    $role          = mysqli_real_escape_string($koneksi, $_POST['role']);

    $query = "INSERT INTO users (nama, kelas, tanggal_lahir, jenis_kelamin, username, email, password, role) 
              VALUES ('$nama', '$kelas', '$tanggal_lahir', '$jenis_kelamin', '$username', '$email', '$password', '$role')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data siswa berhasil disimpan!'); window.location='index.php';</script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>