<?php
include "../connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pesanan_id = $_POST['pesanan_id'];

    // Mengupdate status pesanan menjadi Dibayar
    $sql = "UPDATE tbl_pesanan SET status = 'Pending' WHERE id_pesanan = $pesanan_id";
    if (mysqli_query($conn, $sql)) {
        echo "<meta http-equiv='refresh' content='0; url=../my.php?p=beranda'>";  // Redirect kembali ke form input tenant
        echo "<script>alert('Pembayaran Berhasil!');</script>";
    } else {
        echo "<script>alert('Pembayaran gagal!'); window.location='my.php?p=konfirmasi_pesanan&pesanan_id=$pesanan_id';</script>";
    }

    mysqli_close($conn);
}
?>
