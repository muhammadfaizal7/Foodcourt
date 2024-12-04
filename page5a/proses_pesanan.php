<?php
include "connect.php"; // Pastikan koneksi sudah benar

// Periksa jika data dikirim melalui POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data pesanan yang dikirimkan
    if (isset($_POST['jumlah'])) {
        $jumlah_pesanan = $_POST['jumlah']; // Jumlah menu yang dipilih
    } else {
        echo "<script>alert('Tidak ada menu yang dipilih.'); window.location='my.php?p=datamenu';</script>";
        exit();
    }

    if (isset($_POST['total_harga'])) {
        $total_harga = $_POST['total_harga']; // Total harga pesanan
    } else {
        $total_harga = 0; // Jika tidak ada total harga
    }

    // Validasi input jumlah, pastikan jumlah > 0
    foreach ($jumlah_pesanan as $no_menu => $jumlah) {
        if ($jumlah <= 0) {
            unset($jumlah_pesanan[$no_menu]); // Hapus menu yang jumlahnya 0
        }
    }

    // Query untuk mendapatkan detail menu yang dipilih
    $menus = [];
    $sql = "SELECT * FROM tbl_menu WHERE no_menu IN ('" . implode("','", array_keys($jumlah_pesanan)) . "')";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            // Menghitung total harga untuk setiap menu
            $row['jumlah'] = $jumlah_pesanan[$row['no_menu']];
            $row['total'] = $row['harga'] * $row['jumlah'];
            $total_harga += $row['total']; // Total harga keseluruhan
            $menus[] = $row;
        }
    } else {
        echo "<script>alert('Tidak ada menu yang dipilih.'); window.location='my.php?p=datamenu';</script>";
        exit();
    }

    // Menutup koneksi
    mysqli_close($conn);
} else {
    echo "<script>alert('Pesanan gagal diproses.'); window.location='my.php?p=datamenu';</script>";
    exit();
}
?>

<div class="container mt-4">
    <div class="text-center">
        <h4>Ringkasan Pesanan</h4>
        <hr>
    </div>

    <!-- Menampilkan ringkasan pesanan -->
    <form action="my.php?p=bayar_pesanan" method="POST">
        <table class="table table-striped">
            <tr>
                <th>Nomor Menu</th>
                <th>Foto Menu</th>
                <th>Nama Menu</th>
                <th>Deskripsi</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>

            <?php
            if (!empty($menus)) {
                foreach ($menus as $menu) {
                    echo "<tr>";
                    echo "<td>" . $menu['no_menu'] . "</td>";

                    // Menampilkan foto menu, jika ada
                    if (!empty($menu['foto'])) {
                        echo "<td><img src='assets/img/menu/" . $menu['foto'] . "' width='100px' height='100px'></td>";
                    } else {
                        echo "<td>No Image</td>";
                    }

                    echo "<td>" . $menu['nama'] . "</td>";
                    echo "<td>" . $menu['deskripsi'] . "</td>";
                    echo "<td>" . $menu['jumlah'] . "</td>";
                    echo "<td>" . number_format($menu['total'], 0, ',', '.') . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Pesanan tidak valid.</td></tr>";
            }
            ?>

            <tr>
                <td colspan="5"><strong>Total Harga</strong></td>
                <td><strong><?php echo number_format($total_harga, 0, ',', '.'); ?></strong></td>
            </tr>
        </table>

        <!-- Menyimpan detail pesanan untuk langkah berikutnya -->
        <input type="hidden" name="total_harga" value="<?php echo $total_harga; ?>">
        <input type="hidden" name="menus" value="<?php echo urlencode(serialize($menus)); ?>">

        <button type="submit" class="btn btn-success">Bayar Pesanan</button>
        <a href="my.php?p=datamenu" class="btn btn-warning">Kembali</a>
    </form>
</div>
