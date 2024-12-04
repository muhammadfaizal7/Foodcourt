<?php
include "../connect.php";

// Ambil data dari form
$nopembeli = $_POST['nopembeli'];  // Nomor Pembeli
$namapembeli = $_POST['namapembeli'];  // Nama Pembeli
$gender = $_POST['gender'];  // Jenis Kelamin
$nohp = $_POST['nohp'];  // Nomor Handphone
$alamat = $_POST['alamat'];  // Alamat
$email = $_POST['email'];  // Email

// Query untuk insert data ke dalam tabel pembeli
$sql = "INSERT INTO t_pembeli (no_pembeli, nama, gender, telepon, alamat, email, aktif)
VALUES ('$nopembeli', '$namapembeli', '$gender', '$nohp', '$alamat', '$email', 1)";

// Eksekusi query dan cek keberhasilannya
if (mysqli_query($conn, $sql)) {
    // Jika berhasil, arahkan ke halaman daftar pembeli
    echo "<meta http-equiv='refresh' content='0;url=../my.php?p=pembeli'>";  
} else {
    // Jika gagal, arahkan kembali ke halaman form input dan tampilkan pesan error
    echo "<meta http-equiv='refresh' content='0;url=../my.php?p=pembeli_input'>";
    echo "<script>alert('Gagal menyimpan data pembeli. Silakan coba lagi.');</script>";
}

// Menutup koneksi
mysqli_close($conn);
?>
