<?php
session_start();
include 'koneksi.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$result = mysqli_query($koneksi, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa Kecantikan</title>
    <style>
        body { background-color: #1a1216; color: #f5f5f5; font-family: 'Segoe UI', Arial, sans-serif; margin: 0; padding: 20px; }
        .header-title { text-align: center; color: #ff66a3; font-size: 28px; font-weight: bold; margin-bottom: 5px; letter-spacing: 2px; text-shadow: 0 0 10px rgba(255, 102, 163, 0.3); }
        .subtitle { text-align: center; color: #ffa3c2; font-size: 14px; margin-bottom: 30px; letter-spacing: 1px; }
        .status-bar { display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; }
        .btn { padding: 8px 15px; border-radius: 6px; text-decoration: none; color: white; font-weight: bold; font-size: 14px; transition: 0.3s; }
        .btn-tambah { background-color: #d4427b; border: 1px solid #ff66a3; }
        .btn-tambah:hover { background-color: #ff66a3; box-shadow: 0 0 10px #ff66a3; }
        .btn-logout { background-color: #5a1a32; }
        .btn-logout:hover { background-color: #7d2647; }
        .btn-edit { background-color: #2a6f97; padding: 5px 10px; }
        .btn-edit:hover { background-color: #014f86; }
        .btn-hapus { background-color: #d4427b; padding: 5px 10px; }
        .btn-hapus:hover { background-color: #ff3385; }
        
        table { width: 100%; border-collapse: collapse; background-color: #251b20; border: 1px solid #3d2b34; border-radius: 8px; overflow: hidden; }
        th { background-color: #8c2d52; color: white; padding: 14px; text-align: left; border-bottom: 2px solid #ff66a3; }
        td { padding: 12px; border-bottom: 1px solid #3d2b34; font-size: 14px; }
        tr:nth-child(even) { background-color: #2d2027; }
        tr:hover { background-color: #382831; }
        .footer { text-align: center; margin-top: 40px; color: #8c7380; font-size: 12px; }
    </style>
</head>
<body>

<div class="header-title">✨ DATA SISWA JURUSAN KECANTIKAN ✨</div>
<div class="subtitle">Beauty & Aesthetics Department</div>

<div class="status-bar">
    <div style="color: #ffa3c2; font-weight: bold;">Login sebagai: <span style="color: white;"><?= htmlspecialchars($_SESSION['role']); ?></span></div>
    <a href="logout.php" class="btn btn-logout">Logout</a>
</div>

<a href="tambah.php" class="btn btn-tambah">+ Tambah Data Siswa</a>

<table style="margin-top: 15px;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($row['nama']); ?></td>
            <td><?= htmlspecialchars($row['kelas']); ?></td>
            <td><?= htmlspecialchars($row['tanggal_lahir']); ?></td>
            <td><?= htmlspecialchars($row['jenis_kelamin']); ?></td>
            <td><?= htmlspecialchars($row['username']); ?></td>
            <td><?= htmlspecialchars($row['email']); ?></td>
            <td><?= htmlspecialchars($row['role']); ?></td>
            <td>
                <?php if ($_SESSION['role'] == 'admin') : ?>
                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-edit">Edit</a>
                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus data siswa ini?')">Hapus</a>
                <?php else : ?>
                <span style="color: #666; font-style: italic;">Tidak ada akses</span>
                <?php endif; ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<div class="footer">
    &copy; 2026 by mita sugiarti❤️ 
</div>

</body>
</html>