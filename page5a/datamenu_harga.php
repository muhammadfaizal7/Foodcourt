<?php
include "connect.php"; // Pastikan koneksi sudah benar

// Periksa apakah parameter 'no_menu' ada
if (isset($_GET['no_menu'])) {
    $no_menu = $_GET['no_menu'];
    
    // Ambil data menu berdasarkan no_menu
    $sql = "SELECT * FROM tbl_menu WHERE no_menu = '$no_menu'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Menu tidak ditemukan!'); window.location='my.php?p=aksesmenu';</script>";
        exit();
    }
} else {
    echo "<script>alert('Tidak ada menu yang dipilih!'); window.location='my.php?p=aksesmenu';</script>";
    exit();
}

?>

<div class="container mt-4">
    <div class="text-center">
        <h4>Set Harga Menu</h4>
        <hr>
    </div>

    <!-- Form Set Harga -->
    <form action="page5a/datamenu_hargaproses.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="no_menu" class="form-label">Nomor Menu</label>
            <input type="text" class="form-control" id="no_menu" name="no_menu" value="<?php echo $row['no_menu']; ?>" readonly>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga Menu</label>
            <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $row['harga']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Harga</button>
        <a href="my.php?p=aksesmenu" class="btn btn-warning">Kembali</a>
    </form>
</div>
