<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

// Redirect kembali ke halaman login utama
header("Location: login.php");
exit;
?>