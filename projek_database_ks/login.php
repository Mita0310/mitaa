<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty School Login</title>
    <style>
        body {
            background: radial-gradient(circle, #3a1c28 0%, #15070d 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background-color: #1c1216;
            border: 2px solid #ff66a3;
            box-shadow: 0 0 25px #ff66a3;
            border-radius: 15px;
            padding: 40px;
            width: 350px;
            text-align: center;
        }
        .login-box h2 {
            color: #ff66a3;
            margin-bottom: 5px;
            font-size: 24px;
            letter-spacing: 1px;
        }
        .subtitle {
            color: #ffa3c2;
            font-size: 13px;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .input-group input {
            width: 100%;
            padding: 14px;
            background-color: #2d1f26;
            border: 1px solid #4a343f;
            border-radius: 8px;
            color: white;
            box-sizing: border-box;
            font-size: 14px;
            transition: 0.3s;
        }
        .input-group input:focus {
            border-color: #ff66a3;
            outline: none;
            box-shadow: 0 0 8px rgba(255, 102, 163, 0.5);
        }
        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #d4427b;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            letter-spacing: 1px;
            transition: 0.3s;
        }
        .btn-login:hover {
            background-color: #ff66a3;
            box-shadow: 0 0 15px #ff66a3;
        }
        .signup-text {
            margin-top: 25px;
            font-size: 14px;
            color: #bbb;
        }
        .signup-text a {
            color: #ff66a3;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin-top: 8px;
            font-size: 18px;
            transition: 0.2s;
        }
        .signup-text a:hover {
            text-shadow: 0 0 8px #ff66a3;
        }
        .error-msg { 
            color: #ff66a3; 
            margin-bottom: 20px; 
            font-size: 14px; 
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>💄 BEAUTY SCHOOL 💄</h2>
    <div class="subtitle">Jurusan Kecantikan</div>
    
    <?php if (isset($_GET['pesan']) && $_GET['pesan'] == "gagal") : ?>
        <p class="error-msg">Username/Email atau Password salah!</p>
    <?php endif; ?>

    <form action="proses_login.php" method="POST">
        <div class="input-group">
            <input type="text" name="username_email" placeholder="Username atau Email Jurusan" required autocomplete="off">
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Password Akun" required>
        </div>
        <button type="submit" name="login" class="btn-login">LOGIN</button>
    </form>

   <div class="signup-text">
    Belum terdaftar? Silakan
    <a href="signup.php">Sign Up</a>
    </div>
</div>

</body>
</html>