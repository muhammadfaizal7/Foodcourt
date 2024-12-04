<?php
include "../connect.php";

// Ambil data dari form
$nomor_tenant = $_POST['nomor_tenant'];
$nama_tenant = $_POST['nama_tenant'];
$jenis = $_POST['jenis'];
$lokasi = $_POST['lokasi'];
$jam_operasional = $_POST['jam_operasional'];

// Query untuk insert data tenant
$sql = "INSERT INTO t_tenant (no_tenant, nama, jenis, lokasi, jam_operasional, aktif)
VALUES ('$nomor_tenant', '$nama_tenant', '$jenis', '$lokasi', '$jam_operasional', 1)";

// Eksekusi query dan cek keberhasilannya
if (mysqli_query($conn, $sql)) {
    echo "<meta http-equiv='refresh' content='0;url=../my.php?p=tenant'>";  // Redirect ke halaman daftar tenant
} else {
    echo "<meta http-equiv='refresh' content='0; url=../my.php?p=tenant_input'>";  // Redirect kembali ke form input tenant
    echo "<script>alert('Anda Gagal Menyimpan Data, Silahkan melakukan input ulang.........');</script>";
}

// Menutup koneksi
mysqli_close($conn);
?>
