<div class="text-center" style="margin-top: 20px;">
  <h3>FORM TAMBAH USER</h3>
  <hr>
</div>

<form action="page5a/setuser_inputproses.php" method="POST" enctype="multipart/form-data">
  
  <div class="mb-3">
    <label for="nama" class="form-label">Nama :</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama User" name="nama" style="border-color: #8B5E3C;">
  </div>

  <div class="mb-3">
    <label for="username" class="form-label">Username :</label>
    <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" style="border-color: #8B5E3C;">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password :</label>
    <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" style="border-color: #8B5E3C;">
  </div>

  <div class="mb-3">
    <label for="status" class="form-label">User yang Terdaftar di Sistem :</label>
    <select class="form-select form-control" name="identity" style="border-color: #8B5E3C;">
        <!-- Menampilkan Nomor Tenant -->
        <?php
          include "connect.php";
          $sql = "SELECT * FROM t_tenant where aktif=1";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                echo "<option>".$row["no_tenant"]."</option>";
            }
          }
          $sql = "SELECT * FROM t_pembeli where aktif=1";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<option>".$row["no_pembeli"]."</option>";

            }
          }
        ?>
    </select>
  </div>

  <!-- Radio Button - Authorized -->
  <div class="mb-3">
    <label for="author" class="form-label">Authorized :</label>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="Tenant" name="author" value="Tenant" style="border-color: #8B5E3C;">
        <label class="form-check-label" for="Tenant">Tenant</label>
    </div>
    <div class="form-check">
        <input type="radio" class="form-check-input" id="Pembeli" name="author" value="Pembeli" style="border-color: #8B5E3C;">
        <label class="form-check-label" for="Pembeli">Pembeli</label>
    </div>
  </div>

  <!-- Upload Foto -->
  <div class="mb-3">
    <label for="foto" class="form-label">Upload Foto:</label>
    <input type="file" class="form-control" id="foto" name="foto" style="border-color: #8B5E3C;">
  </div>

  <div class="mb-3 text-center">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
    <a href="my.php?p=setuser" class="btn btn-warning">Kembali</a>
  </div>
</form>
