<div class="text-center">
    <h2>Akses Daftar Pesanan</h2>
    <hr>
</div>

<a href="my.php?p=tambah_pesanan" class="btn btn-info">Tambah Pesanan</a>
<hr>

<table class="table table-striped" style="width:100%">
    <tr>
        <th>Nomor Pesanan</th>
        <th>Tanggal Pesanan</th>
        <th>Total Harga</th>
        <th>Status</th>
        <th>Detail Pesanan</th>
        <th>Option</th>
    </tr>

<?php
    include "connect.php";
    $identity = $_SESSION["identity"]; // Mengambil id tenant dari session

    // Query untuk mengambil data pesanan yang aktif berdasarkan no_tenant
    $sql = "SELECT * FROM tbl_pesanan WHERE no_tenant = '$identity' ORDER BY tanggal_pesanan DESC";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        // Jika query gagal, tampilkan error
        die('Query Error: ' . mysqli_error($conn));
    }

    $no = 1;

    if (mysqli_num_rows($result) > 0) {
        // Menampilkan setiap baris pesanan
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_pesanan'] . "</td>";
            echo "<td>" . date('d-m-Y', strtotime($row['tanggal_pesanan'])) . "</td>";
            echo "<td>" . number_format($row['total_harga'], 0, ',', '.') . "</td>";
            echo "<td>" . ucfirst($row['status']) . "</td>";

            // Tombol untuk melihat detail pesanan
            echo "<td>";
            echo "<a href='my.php?p=detail_pesanan&id=" . $row['id_pesanan'] . "' class='btn btn-primary'>Lihat Detail</a>";
            echo "</td>";

            // Opsi untuk menghapus pesanan jika status masih dapat diubah
            echo "<td>";
            if ($row['status'] == 'pending') {
                echo "<a href='my.php?p=hapus_pesanan&id=" . $row['id_pesanan'] . "' class='btn btn-danger'>Hapus</a>";
            }
            echo "</td>";

            echo "</tr>";
            $no++;
        }
    } else {
        echo "<tr><td colspan='6'>Tidak ada pesanan yang ditemukan.</td></tr>";
    }
?>
</table>
