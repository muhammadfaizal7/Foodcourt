<?php
    include "../connect.php";

    $id = $_GET['id'];  // Ambil ID pembeli dari URL
    // Ambil data dari form
    $nopembeli = $_POST['nopembeli'];
    $namapembeli = $_POST['namapembeli'];
    $gender = $_POST['gender'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];  // Ambil data email dari form

    // Query untuk update data pembeli
    $sql = "UPDATE t_pembeli SET
        no_pembeli='$nopembeli',
        nama='$namapembeli',
        gender='$gender',
        telepon='$nohp',
        alamat='$alamat',
        email='$email'
        WHERE id=$id";

    // Eksekusi query dan cek keberhasilannya
    if (mysqli_query($conn, $sql)) {
        echo "<meta http-equiv='refresh' content='0;url=../my.php?p=pembeli'>";  // Redirect ke halaman daftar pembeli
    } else {
        echo "Error updating record: " . mysqli_error($conn);  // Tampilkan error jika gagal update
    }

    // Menutup koneksi
    mysqli_close($conn);
?>
