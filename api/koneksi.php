<?php
// Masukkan data asli dari Clever Cloud milikmu
$host = "ISI_HOST_DARI_CLEVER_CLOUD"; 
$user = "bzql9ktnyebmycsxogzp"; // Sesuai dengan user di phpMyAdmin kamu
$pass = "ISI_PASSWORD_DARI_CLEVER_CLOUD"; 
$db   = "bzql9ktnyebmycsxogzp"; // Sesuai dengan nama database di phpMyAdmin kamu

// Angka 3306 wajib ditulis di akhir agar koneksi cloud berjalan lancar
$koneksi = mysqli_connect($host, $user, $pass, $db, 3306);

if (!$koneksi) {
    die("Koneksi ke database cloud gagal: " . mysqli_connect_error());
}
?>