<?php
include "../connect.php"; // Pastikan koneksi sudah benar

// Periksa apakah data POST ada
if (isset($_POST['no_menu']) && isset($_POST['harga'])) {
    $no_menu = $_POST['no_menu'];
    $harga = $_POST['harga'];

    // Update harga menu di database
    $sql = "UPDATE tbl_menu SET harga = '$harga' WHERE no_menu = '$no_menu'";

    if (mysqli_query($conn, $sql)) {
        // Menggunakan meta refresh untuk mengalihkan halaman setelah update berhasil
        echo "<meta http-equiv='refresh' content='0; url=../my.php?p=datamenu'>";
    } else {
        // Menampilkan pesan gagal dan menggunakan meta refresh untuk kembali
        echo "<script>alert('Gagal memperbarui harga. Coba lagi!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=my.php?p=datamenu'>";
    }
} else {
    // Jika data tidak lengkap, tampilkan pesan dan arahkan dengan meta refresh
    echo "<script>alert('Data tidak lengkap!');</script>";
    echo "<meta http-equiv='refresh' content='0; url=my.php?p=datamenu'>";
}

mysqli_close($conn);
?>
