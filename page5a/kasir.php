<?php
include "connect.php";

// Mengambil semua data pesanan dari tabel tbl_pesanan
$sql = "SELECT * FROM tbl_pesanan";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Query Error: ' . mysqli_error($conn));
}
?>

<div class="container mt-4">
    <div class="text-center">
        <h4>Daftar Pesanan</h4>
        <hr>
    </div>
    
    <table class="table table-striped">
        <tr>
            <th>Nomor Pesanan</th>
            <th>Total Harga</th>
            <th>Waktu Pesan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php
        // Menampilkan semua data pesanan
        while ($pesanan = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $pesanan['id_pesanan'] . "</td>";
            echo "<td>" . number_format($pesanan['total_harga'], 0, ',', '.') . "</td>";
            echo "<td>" . $pesanan['tanggal_pesanan'] . "</td>";
            echo "<td>" . $pesanan['status'] . "</td>";

            // Menyediakan opsi untuk mengubah status pesanan
            echo "<td>
                    <form action='page5a/kasir_proses.php' method='POST'>
                        <input type='hidden' name='id_pesanan' value='" . $pesanan['id_pesanan'] . "'>
                        <select name='status' class='form-control'>
                            <option value='Pending'" . ($pesanan['status'] == 'Pending' ? ' selected' : '') . ">Pending</option>
                            <option value='diBayar'" . ($pesanan['status'] == 'diBayar' ? ' selected' : '') . ">diBayar</option>
                            <option value='Selesai'" . ($pesanan['status'] == 'Selesai' ? ' selected' : '') . ">Selesai</option>
                        </select>
                        <button type='submit' name='ubah_status' class='btn btn-warning mt-2'>Ubah Status</button>
                    </form>
                    </td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
