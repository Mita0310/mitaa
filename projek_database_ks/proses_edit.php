<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

if (isset($_POST['update'])) {
    // Menangkap ID kiriman form
    $id            = mysqli_real_escape_string($koneksi, $_POST['id']);
    
    $nama          = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kelas         = mysqli_real_escape_string($koneksi, $_POST['kelas']);
    $tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir']);
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
    $password      = mysqli_real_escape_string($koneksi, $_POST['password']);
    $role          = mysqli_real_escape_string($koneksi, $_POST['role']);

    // KUNCI SUKSES: Klausa WHERE mengunci ID agar data lain tidak ikut terganti
    $query = "UPDATE users SET 
                nama = '$nama', 
                kelas = '$kelas', 
                tanggal_lahir = '$tanggal_lahir', 
                jenis_kelamin = '$jenis_kelamin', 
                password = '$password', 
                role = '$role' 
              WHERE id = '$id'";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data siswa berhasil diperbarui!'); window.location='index.php';</script>";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($koneksi);
    }
} else {
    header("Location: index.php");
    exit;
}
?>