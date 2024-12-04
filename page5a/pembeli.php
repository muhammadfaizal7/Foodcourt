    <div class="text-center">
        <h3>DAFTAR PEMBELI </h3>
        <hr>
    </div>

    <a href="my.php?p=pembeli_input" class="btn btn-info">Tambah Pembeli</a>
    <hr>

    <table class="table table-striped">
        <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Nomor Handphone</th>
        <th>Email</th>
        <th>Option</th>
        </tr>

    <?php
        include "connect.php"; // pastikan koneksi database benar
        $sql = "SELECT * FROM t_pembeli WHERE aktif=1";
        $result = mysqli_query($conn, $sql);

        // Cek apakah query berhasil
        if (!$result) {
            die("Query gagal: " . mysqli_error($conn));  // Menampilkan error jika query gagal
        }

        if (mysqli_num_rows($result) > 0) {
            // output data dari setiap baris
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['no_pembeli'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['telepon'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";

                $idget = $row['id'];
                echo "<td>";
                echo "<a href='my.php?p=pembeli_edit&id=$idget' class='btn btn-warning'>Edit</a>";
                echo "<a href='my.php?p=pembeli_hapus&id=$idget' class='btn btn-danger'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada data pembeli</td></tr>";
        }
    ?>
    </table>
