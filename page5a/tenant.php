<div class="text-center">
    <h3>DAFTAR TENANT</h3>
    <hr>
</div>

<a href="my.php?p=tenant_input" class="btn btn-info">Tambah Tenant</a>
<hr>

<table class="table table-striped">
    <tr>
        <th>Nomor Tenant</th>
        <th>Nama Tenant</th>
        <th>Jenis</th>
        <th>Lokasi</th>
        <th>Jam Operasional</th>
        <th>Option</th>
    </tr>
<?php
    include "connect.php";
    $sql = "SELECT * FROM t_tenant WHERE aktif=1";
    $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo"<tr>";
      echo"<td>".$row['no_tenant']."</td>";
      echo"<td>".$row['nama']."</td>";
      echo"<td>".$row['jenis']."</td>";
      echo"<td>".$row['lokasi']."</td>";
      echo"<td>".$row['jam_operasional']."</td>";
      
      $idget = $row['id'];
      echo"<td>";
      echo"<a href='my.php?p=tenant_edit&id=$idget' class='btn btn-warning'>Edit</a>";
      echo"<a href='my.php?p=tenant_hapus&id=$idget' class='btn btn-danger'>Hapus</a>";
      echo"</td>";
      echo"</tr>";
    }
  } else {
    echo "0 results";
  }
?>
</table>
