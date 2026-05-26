<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    echo "<script>alert('Anda tidak memiliki hak akses!'); window.location='index.php';</script>";
    exit;
}

// Menangkap ID dari URL browser
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
} else {
    header("Location: index.php");
    exit;
}

// Mengambil data spesifik siswa yang mau diedit saja
$result = mysqli_query($koneksi, "SELECT * FROM users WHERE id = '$id'");
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='index.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa Kecantikan</title>
    <style>
        body { background: radial-gradient(circle, #1a1e29 0%, #0d1117 100%); font-family: 'Segoe UI', Arial, sans-serif; color: white; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .form-box { background-color: #161b22; border: 1px solid #ff66a3; box-shadow: 0 0 15px rgba(255, 102, 163, 0.4); border-radius: 12px; padding: 30px; width: 400px; }
        .form-box h2 { text-align: center; color: #ff66a3; margin-bottom: 25px; font-size: 22px; }
        .input-field { width: 100%; padding: 11px; margin-bottom: 15px; background-color: #21262d; border: 1px solid #30363d; border-radius: 6px; color: white; box-sizing: border-box; }
        .input-field:focus { border-color: #ff66a3; outline: none; }
        .input-field[readonly] { background-color: #161214; color: #777; cursor: not-allowed; }
        label { display: block; margin-bottom: 5px; color: #cca3b5; font-size: 13px; }
        .btn-update { width: 100%; padding: 12px; background-color: #d4427b; border: none; color: white; font-weight: bold; border-radius: 6px; cursor: pointer; font-size: 15px; }
        .btn-update:hover { background-color: #ff66a3; box-shadow: 0 0 10px #ff66a3; }
    </style>
</head>
<body>

<div class="form-box">
    <h2>✨ EDIT DATA SISWA ✨</h2>
    <form action="proses_edit.php" method="POST">
        
        <input type="hidden" name="id" value="<?= $data['id']; ?>">

        <label>Nama Siswa:</label>
        <input type="text" name="nama" class="input-field" value="<?= htmlspecialchars($data['nama']); ?>" required>
        
        <label>Kelas:</label>
        <select name="kelas" class="input-field" required>
            <option value="XI KECANTIKAN & SPA 1" <?= $data['kelas'] == 'XI KECANTIKAN & SPA 1' ? 'selected' : ''; ?>>XI KECANTIKAN & SPA 1</option>
            <option value="XI KECANTIKAN & SPA 2" <?= $data['kelas'] == 'XI KECANTIKAN & SPA 2' ? 'selected' : ''; ?>>XI KECANTIKAN & SPA 2</option>
            <option value="XI KECANTIKAN & SPA 3" <?= $data['kelas'] == 'XI KECANTIKAN & SPA 2' ? 'selected' : ''; ?>>XI KECANTIKAN & SPA 3</option>
        </select>
        
        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" class="input-field" value="<?= $data['tanggal_lahir']; ?>" required>

        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin" class="input-field" required>
            <option value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
            <option value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
        </select>

        <label>Username (Permanen):</label>
        <input type="text" class="input-field" value="<?= htmlspecialchars($data['username']); ?>" readonly>
        
        <label>Email (Permanen):</label>
        <input type="email" class="input-field" value="<?= htmlspecialchars($data['email']); ?>" readonly>
        
        <label>Password Akun:</label>
        <input type="text" name="password" class="input-field" value="<?= htmlspecialchars($data['password']); ?>" required>
        
        <label>Role Hak Akses:</label>
        <select name="role" class="input-field" required>
            <option value="user" <?= $data['role'] == 'user' ? 'selected' : ''; ?>>User</option>
            <option value="admin" <?= $data['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
        </select>

        <button type="submit" name="update" class="btn-update">UPDATE DATA SISWA</button>
    </form>
</div>

</body>
</html>