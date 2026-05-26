<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $nama          = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kelas         = mysqli_real_escape_string($koneksi, $_POST['kelas']);
    $tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $username      = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email         = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password      = mysqli_real_escape_string($koneksi, $_POST['password']);
    $role          = $_POST['role']; // Otomatis bernilai 'user'

    // Query untuk memasukkan data ke database
    $query = "INSERT INTO users (nama, kelas, tanggal_lahir, jenis_kelamin, username, email, password, role) 
              VALUES ('$nama', '$kelas', '$tanggal_lahir', '$jenis_kelamin', '$username', '$email', '$password', '$role')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Pendaftaran berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "Gagal Mendaftar: " . mysqli_error($koneksi);
    }
}
?>