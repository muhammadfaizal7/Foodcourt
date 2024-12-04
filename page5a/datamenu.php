<div class="text-center">
    <h4>DAFTAR MENU</h4>
    <hr>
</div>

<hr>

<table class="table table-striped">
    <tr>
        <th>Nomor</th>
        <th>Nomor Menu</th>
        <th>Jenis Menu</th>
        <th>Nama Menu</th>
        <th>Deskripsi</th>
        <th>Foto</th>
        <th>Harga</th>
        <th>Option</th>
    </tr>

<?php
    include "connect.php"; // Pastikan path file koneksi benar

    // Query untuk menampilkan semua data menu yang aktif
    $sql = "SELECT * FROM tbl_menu WHERE aktif = 1";
    $result = mysqli_query($conn, $sql);
    $no = 1;

    if (mysqli_num_rows($result) > 0) {
        // Output data dari setiap baris
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $row['no_menu'] . "</td>";
            echo "<td>" . $row['jenis_menu'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['deskripsi'] . "</td>";

            // Tampilkan gambar jika ada foto
            if (!empty($row['foto'])) {
                echo "<td><img src='assets/img/menu/" . $row['foto'] . "' width='50' height='50'></td>";
            } else {
                echo "<td>No Image</td>";
            }

            echo "<td>" . ($row['harga'] == 0 ? 'Belum set harga' : 'sudah set harga') . "</td>";

            // Tombol aksi: Setujui, Tolak, Koreksi
            $no_menu = $row['no_menu'];
            echo "<td class='text-center'>";
            echo "<a href='my.php?p=datamenu_harga&no_menu=$no_menu' class='btn btn-success'>set harga</a>";
            echo "</td>";

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='8'>Tidak ada menu yang ditemukan.</td></tr>";
    }
?>
</table>
