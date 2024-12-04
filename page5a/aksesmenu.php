<div class="text-center">
    <h2>Akses Tambah Daftar Menu</h2>
    <hr>
</div>

<a href="my.php?p=aksesmenu_input" class="btn btn-info">Tambah Daftar Menu</a>
<hr>

<table class="table  table-striped" style="width:fixed">
    <tr>
        <th>nomor</th>
        <th>Nomor Menu</th>
        <th>Nomor Tenant</th>
        <th>Foto Menu</th>
        <th>Jenis Menu</th>
        <th>Nama Menu</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Option</th>
    </tr>

<?php
    include "connect.php";
    $identity = $_SESSION["identity"];

    // Pastikan query valid, dengan pengecekan error
    $sql = "SELECT * FROM tbl_menu WHERE aktif=1 AND no_tenant='$identity'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        // Jika query gagal, tampilkan error
        die('Query Error: ' . mysqli_error($conn));
    }

    $no = 1;

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo"<tr>";
            echo"<td>".$no."</td>";
            echo"<td>".$row['no_menu']."</td>";
            echo"<td>".$row['no_tenant']."</td>";
            echo "<td><img src='assets/img/menu/".$row['foto']."'width='100px' height='100px'></td>";
            echo"<td>".$row['jenis_menu']."</td>";
            echo"<td>".$row['nama']."</td>";
            echo"<td>".$row['deskripsi']."</td>";
            echo"<td>".$row['harga']."</td>";

            $idget = $row['id'];
    $no ++;
            echo"<td>";
            echo "<a href='my.php?p=aksesmenu_hapus&id=$idget' class='btn btn-danger'>Hapus Menu</a>";
            echo"</td>";

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>Tidak ada hasil yang ditemukan.</td></tr>";
    }
?>
</table>
