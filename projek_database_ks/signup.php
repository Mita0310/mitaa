<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Beauty School</title>
    <style>
        body { 
            background: radial-gradient(circle, #2d1a22 0%, #150a0f 100%); 
            font-family: 'Segoe UI', Arial, sans-serif; 
            color: white; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            min-height: 100vh; 
            margin: 0; 
        }
        .form-box { 
            background-color: #21141a; 
            border: 1px solid #ff66a3; 
            box-shadow: 0 0 15px rgba(255, 102, 163, 0.3); 
            border-radius: 12px; 
            padding: 30px; 
            width: 400px; 
        }
        .form-box h2 { text-align: center; color: #ff66a3; margin-bottom: 5px; font-size: 22px; letter-spacing: 1px; }
        .subtitle { text-align: center; color: #cca3b5; font-size: 13px; margin-bottom: 25px; }
        .input-field { 
            width: 100%; 
            padding: 11px; 
            margin-bottom: 15px; 
            background-color: #2d1c24; 
            border: 1px solid #4a313d; 
            border-radius: 6px; 
            color: white; 
            box-sizing: border-box; 
            font-size: 14px;
        }
        .input-field:focus { border-color: #ff66a3; outline: none; }
        select.input-field option { background-color: #21141a; color: white; }
        label { display: block; margin-bottom: 5px; color: #cca3b5; font-size: 13px; }
        .btn-daftar { 
            width: 100%; 
            padding: 12px; 
            background-color: #d4427b; 
            border: none; 
            color: white; 
            font-weight: bold; 
            border-radius: 6px; 
            cursor: pointer; 
            font-size: 15px; 
            transition: 0.3s;
        }
        .btn-daftar:hover { background-color: #ff66a3; box-shadow: 0 0 10px #ff66a3; }
        .login-link { text-align: center; margin-top: 15px; font-size: 14px; color: #bbb; }
        .login-link a { color: #ff66a3; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

<div class="form-box">
    <h2>🌸 DAFTAR AKUN BARU 🌸</h2>
    <div class="subtitle">Silakan isi biodata jurusan kecantikan</div>
    
    <form action="proses_signup.php" method="POST">
        <input type="text" name="nama" class="input-field" placeholder="Nama Lengkap Kamu" required>
        
        <select name="kelas" class="input-field" required>
            <option value="" disabled selected>-- Pilih Kelas Kecantikan --</option>
            <option value="XI KECANTIKAN & SPA 1">XI KECANTIKAN & SPA 1</option>
            <option value="XI KECANTIKAN & SPA 2">XI KECANTIKAN & SPA 2</option>
            <option value="XI KECANTIKAN & SPA 3">XI KECANTIKAN & SPA 3</option>
        </select>
        
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="input-field" required>

        <select name="jenis_kelamin" class="input-field" required>
            <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-laki">Laki-laki</option>
        </select>

        <input type="text" name="username" class="input-field" placeholder="Buat Username" required>
        <input type="email" name="email" class="input-field" placeholder="Masukkan Email" required>
        <input type="password" name="password" class="input-field" placeholder="Buat Password" required>
        
        <input type="hidden" name="role" value="user">

        <button type="submit" name="register" class="btn-daftar">REGISTRASI SEKARANG</button>
    </form>

    <div class="login-link">
        Sudah punya akun? <a href="login.php">Log In</a>
    </div>
</div>

</body>
</html>