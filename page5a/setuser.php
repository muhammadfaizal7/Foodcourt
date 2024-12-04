<div class="text-center" style="margin-top: 20px;">
    <h3>MANAJEMEN USER APLIKASI</h3>
    <hr>

</div>

<a href="my.php?p=setuser_input" class="btn btn-info">Tambah User</a>
<hr>

<table class="table table-striped">
<tr>
    <th>Nomor</th>
    <th>Foto</th>
    <th>Nama</th>
    <th>Username</th>
    <th>Password</th>
    <th>Authorized</th>
    <th>Option</th>
</tr>

<?php

    include "connect.php";

    $sql = "SELECT * FROM t_user WHERE aktif = 1";
    $result = mysqli_query($conn, $sql);
    $no = 1;

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

        if ($row['id']!=1){
            
        echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td><img src='assets/img/".$row['foto']."'width='100px' height='100px'></td>";
        echo "<td>", $row['nama'],"</td>";
        echo "<td>", $row['username'],"</td>";
        echo "<td>", $row['password'],"</td>";
        echo "<td>", $row['authorized'],"</td>";


        $idget = $row['id'];
        echo "<td>";
        echo "<a href='my.php?p=setuser_edit&id=$idget' class='btn btn-warning'>Edit</a>";
        echo "<a href='my.php?p=setuser_hapus&id=$idget' class='btn btn-danger'>Hapus</a>";
        echo "</td>";
        echo "</tr>";

        $no++;}

    }
    } else {
        echo "0 results";
    }


?>
</table>
