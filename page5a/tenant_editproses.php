<?php
    include "../connect.php";

    $id = $_GET['id'];
    // Ambil data dari form
    $nomor_tenant = $_POST['nomor_tenant'];
    $nama_tenant = $_POST['nama_tenant'];
    $jenis = $_POST['jenis'];
    $lokasi = $_POST['lokasi'];
    $jam_operasional = $_POST['jam_operasional'];

    // Query untuk update data tenant
    $sql = "UPDATE t_tenant SET
        no_tenant='$nomor_tenant',
        nama='$nama_tenant',
        jenis='$jenis',
        lokasi='$lokasi',
        jam_operasional='$jam_operasional'
        WHERE id=$id";

    // Eksekusi query dan cek keberhasilannya
    if (mysqli_query($conn, $sql)) {
        // Jika berhasil, redirect ke halaman tenant
        echo "<meta http-equiv='refresh' content='0;url=../my.php?p=tenant'>";
    } else {
        // Jika gagal, tampilkan error
        echo "Error updating record: " . mysqli_error($conn);
    }

    // Menutup koneksi
    mysqli_close($conn);
?>
