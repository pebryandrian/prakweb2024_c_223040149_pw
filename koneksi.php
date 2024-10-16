<?php
$servername = "localhost";
$username = "root";
$password = ""; // Kosongkan jika tidak ada password
$database = "prakweb_2024_c_223040149";

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
