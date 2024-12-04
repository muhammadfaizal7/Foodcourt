<?php
include "connect.php";

if (isset($_GET['pesanan_id'])) {
    $pesanan_id = $_GET['pesanan_id'];
    
    // Mengambil data pesanan dari tabel tbl_pesanan
    $sql = "SELECT * FROM tbl_pesanan WHERE id_pesanan = $pesanan_id";
    $result = mysqli_query($conn, $sql);
    $pesanan = mysqli_fetch_assoc($result);

    // Mengambil detail pesanan dari tabel tbl_pesanan_detail
    $sql_detail = "SELECT * FROM tbl_pesanan_detail WHERE pesanan_id = $pesanan_id";
    $result_detail = mysqli_query($conn, $sql_detail);
} else {
    echo "<script>alert('ID pesanan tidak valid.'); window.location='my.php?p=datamenu';</script>";
}
?>

<div class="container mt-4">
    <div class="text-center">
        <h4>Konfirmasi Pesanan</h4>
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
        while ($row = mysqli_fetch_assoc($result_detail)) {
            // Mengambil nama menu
            $menu_sql = "SELECT * FROM tbl_menu WHERE no_menu = '".$row['no_menu']."'";
            $menu_result = mysqli_query($conn, $menu_sql);
            $menu = mysqli_fetch_assoc($menu_result);
            
            echo "<tr>";
            echo "<td>" . $row['no_menu'] . "</td>";
            echo "<td>" . $menu['nama'] . "</td>";
            echo "<td>" . $row['jumlah'] . "</td>";
            echo "<td>" . number_format($row['total_harga'], 0, ',', '.') . "</td>";
            echo "</tr>";
        }
        ?>
        <tr>
            <td colspan="3"><strong>Total Harga</strong></td>
            <td><strong><?php echo number_format($pesanan['total_harga'], 0, ',', '.'); ?></strong></td>
        </tr>
    </table>
    
    <!-- Tombol pembayaran -->
    <form action="page5a/pembayaran.php" method="POST">
        <input type="hidden" name="pesanan_id" value="<?php echo $pesanan_id; ?>">
        <button type="submit" class="btn btn-success">Bayar Sekarang</button>
    </form>
</div>
