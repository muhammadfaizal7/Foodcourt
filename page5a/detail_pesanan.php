<?php
include "connect.php";

if (isset($_GET['id'])) {
    $pesanan_id = $_GET['id'];

    // Mengambil informasi pesanan
    $sql = "SELECT * FROM tbl_pesanan WHERE id_pesanan = $pesanan_id";
    $result = mysqli_query($conn, $sql);
    $pesanan = mysqli_fetch_assoc($result);

    if (!$pesanan) {
        echo "<script>alert('Pesanan tidak ditemukan.'); window.location='my.php?p=aksespesanan';</script>";
        exit();
    }

    // Mengambil detail pesanan
    $sql_detail = "SELECT * FROM tbl_pesanan_detail WHERE pesanan_id = $pesanan_id";
    $result_detail = mysqli_query($conn, $sql_detail);
}
?>
<div class="container mt-4">
    <div class="text-center">
        <h4>Detail Pesanan #<?php echo $pesanan['id_pesanan']; ?></h4>
        <hr>
    </div>

    <table class="table table-striped">
        <tr>
            <th>Nomor Menu</th>
            <th>Nama Menu</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
        </tr>

        <?php
        if (mysqli_num_rows($result_detail) > 0) {
            while ($row = mysqli_fetch_assoc($result_detail)) {
                $menu_sql = "SELECT * FROM tbl_menu WHERE no_menu = '" . $row['no_menu'] . "'";
                $menu_result = mysqli_query($conn, $menu_sql);
                $menu = mysqli_fetch_assoc($menu_result);

                echo "<tr>";
                echo "<td>" . $row['no_menu'] . "</td>";
                echo "<td>" . $menu['nama'] . "</td>";
                echo "<td>" . $row['jumlah'] . "</td>";
                echo "<td>" . number_format($row['total_harga'], 0, ',', '.') . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada detail pesanan.</td></tr>";
        }
        ?>
        <tr>
            <td colspan="3"><strong>Total Harga</strong></td>
            <td><strong><?php echo number_format($pesanan['total_harga'], 0, ',', '.'); ?></strong></td>
        </tr>
    </table>

    <a href="my.php?p=aksespesanan" class="btn btn-warning">Kembali ke Daftar Pesanan</a>
</div>
