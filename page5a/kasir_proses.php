<?php
include "../connect.php";

// Proses mengubah status pesanan
if (isset($_POST['ubah_status'])) {
    $id_pesanan = $_POST['id_pesanan'];
    $status_baru = $_POST['status'];

    // Query untuk update status pesanan
    $update_sql = "UPDATE tbl_pesanan SET status = '$status_baru' WHERE id_pesanan = $id_pesanan";
    $update_result = mysqli_query($conn, $update_sql);

    if ($update_result) {
        // Mengarahkan kembali ke halaman kasir setelah status diubah
        echo "<meta http-equiv='refresh' content='0; url=../my.php?p=kasir'>";  // Redirect kembali ke form input tenant
        echo "<script>alert('DATA BERHASIL DIPERBARUI!');</script>";
    } else {
        echo "<script>alert('Gagal mengubah status pesanan: " . mysqli_error($conn) . "');</script>"; // Menampilkan error MySQL
    }
}
?>
