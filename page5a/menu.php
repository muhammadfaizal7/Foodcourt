<form action="my.php?p=proses_pesanan" method="POST">
    <table class="table table-striped">
        <tr>
            <th>Nomor Menu</th>
            <th>Foto Menu</th>
            <th>Nama Menu</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>

        <?php
            include "connect.php"; // Pastikan koneksi sudah benar

            // Query untuk menampilkan menu yang aktif
            $sql = "SELECT * FROM tbl_menu WHERE aktif = 1";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                die('Query Error: ' . mysqli_error($conn));
            }

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['no_menu'] . "</td>";

                    // Menampilkan foto menu, jika ada
                    if (!empty($row['foto'])) {
                        echo "<td><img src='assets/img/menu/" . $row['foto'] . "' width='100px' height='100px'></td>";
                    } else {
                        echo "<td>No Image</td>";
                    }

                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['deskripsi'] . "</td>";
                    echo "<td>" . number_format($row['harga'], 0, ',', '.') . "</td>";

                    // Input jumlah pesanan untuk setiap menu
                    echo "<td><input type='number' name='jumlah[" . $row['no_menu'] . "]' value='0' min='0' max='10' class='form-control'></td>";

                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada menu yang tersedia.</td></tr>";
            }

            mysqli_close($conn);
        ?>
    </table>

    <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
</form>
