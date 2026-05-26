<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username_email = mysqli_real_escape_string($koneksi, $_POST['username_email']);
    $password = $_POST['password'];

    // Cari berdasarkan username ATAU email
    $query = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Pengecekan password langsung string cocok
        if ($password === $row['password']) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['kelas'] = $row['kelas']; // <--- TAMBAHKAN BARIS INI BIAR KELASNYA GA ERROR!

            header("Location: index.php");
            exit;
        }
    }
    
    // Jika gagal, kembali ke login dengan indikasi error
    header("Location: login.php?pesan=gagal");
    exit;
}
?>