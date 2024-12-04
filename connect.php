<?php
// Informasi server database
$host = 'localhost'; // Biasanya 'localhost' jika dijalankan secara lokal
$username = 'root'; // Username database MySQL
$password = ''; // Password database MySQL (biarkan kosong jika tidak ada)
$database = 'dbsfoodcourt'; // Nama database yang akan digunakan

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
// echo "Koneksi berhasil!";