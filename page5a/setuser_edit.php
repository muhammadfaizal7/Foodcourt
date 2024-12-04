<?php
    include "connect.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM t_user WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $nama = $row['nama'];
            $username = $row['username'];
            $password = $row['password'];
            $authorized = $row['authorized'];
            $foto = $row['foto'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Edit User - Food Court</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Edit User - Food Court</h2>
    <form action="page5a/setuser_editproses.php?id=<?php echo $id.'&foto='.$foto .'&aut='.$authorized ?>" method="POST" enctype="multipart/form-data">
        
        <!-- Input Nama -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>" required>
        </div>

        <!-- Input Username -->
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username ?>" required>
        </div>

        <!-- Input Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $password ?>" required>
        </div>

        <!-- User yang Terdaftar di Sistem -->
        <div class="mb-3">
            <label for="status" class="form-label">User yang Terdaftar di Sistem</label>
            <select class="form-select form-control" name="identity" required>
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

        <!-- Authorized (Peran Tenant atau Pembeli) -->
        <div class="mb-3">
            <label for="author" class="form-label">Authorized:</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="Tenant" name="author" value="Tenant" <?php if ($authorized == "Tenant") { echo "checked"; } ?> required>
                <label class="form-check-label" for="Tenant">Tenant</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="Pembeli" name="author" value="Pembeli" <?php if ($authorized == "Pembeli") { echo "checked"; } ?>>
                <label class="form-check-label" for="Pembeli">Pembeli</label>
            </div>
        </div>

        <!-- Upload Foto User -->
    <div class="mb-3">
        <img src="assets/img/<?php echo $foto ?>" width="200px" height="200px"><br>
        <label for="foto" class="form-label">Upload Foto:</label>
        <input type="file" class="form-control" id="foto" name="foto">
    </div>

        <!-- Tombol Simpan, Reset dan Kembali -->
        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="my.php?p=setuser" class="btn btn-warning">Kembali</a>
        </div>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
