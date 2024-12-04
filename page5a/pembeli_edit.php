<?php
include "connect.php";

// Ambil ID dari URL
$id = $_GET['id'];

// Query untuk mendapatkan data pembeli berdasarkan ID
$sql = "SELECT * FROM t_pembeli WHERE id = $id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Ambil data dari result
    while ($row = mysqli_fetch_assoc($result)) {
        $no_pembeli = $row['no_pembeli'];
        $nama = $row['nama'];
        $gender = $row['gender'];
        $nohp = $row['telepon'];
        $alamat = $row['alamat'];
        $email = $row['email'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Edit Pembeli</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Formulir Edit Pembeli</h2>
    <form action="page5a/pembeli_editproses.php?id=<?php echo $id ?>" method="POST">
        <div class="mb-3">
            <label for="nopembeli" class="form-label">Nomor Pembeli</label>
            <input type="text" class="form-control" id="nopembeli" name="nopembeli" value="<?php echo $no_pembeli ?>" required>
        </div>
        <div class="mb-3">
            <label for="namapembeli" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control" id="namapembeli" name="namapembeli" value="<?php echo $nama ?>" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="laki-laki" name="gender" value="laki-laki" <?php if ($gender == "laki-laki") { echo "checked"; } ?>>
                <label class="form-check-label" for="laki-laki">Laki-laki</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="perempuan" name="gender" value="perempuan" <?php if ($gender == "perempuan") { echo "checked"; } ?>>
                <label class="form-check-label" for="perempuan">Perempuan</label>
            </div>
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">Nomor Handphone</label>
            <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $nohp ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>" required>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
        <br>
        <a href="my.php?p=pembeli" class="btn btn-warning form-check-label">Kembali</a>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
