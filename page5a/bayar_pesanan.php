<?php
include "connect.php"; // Koneksi database

// Mengambil data dari form yang sudah diisi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $total_harga = $_POST['total_harga'];
    $menus = unserialize(urldecode($_POST['menus']));

    // Menyimpan data pesanan ke tabel tbl_pesanan
    $sql = "INSERT INTO tbl_pesanan (total_harga) VALUES ($total_harga)";
    if (mysqli_query($conn, $sql)) {
        // Mendapatkan ID pesanan yang baru saja dimasukkan
        $pesanan_id = mysqli_insert_id($conn);

        // Menyimpan detail pesanan ke tabel tbl_pesanan_detail
        foreach ($menus as $menu) {
            $no_menu = $menu['no_menu'];
            $jumlah = $menu['jumlah'];
            $total_harga_menu = $menu['total'];

            $sql_detail = "INSERT INTO tbl_pesanan_detail (pesanan_id, no_menu, jumlah, total_harga) 
                            VALUES ($pesanan_id, '$no_menu', $jumlah, $total_harga_menu)";
            mysqli_query($conn, $sql_detail);
        }

        // Menutup koneksi
        mysqli_close($conn);

        // Redirect ke halaman konfirmasi atau pembayaran
        echo "<script>alert('Pesanan berhasil disimpan!'); window.location='my.php?p=konfirmasi_pesanan&pesanan_id=$pesanan_id';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan pesanan.'); window.location='my.php?p=datamenu';</script>";
    }
} else {
    echo "<script>alert('Akses tidak valid.'); window.location='my.php?p=datamenu';</script>";
}
?>
