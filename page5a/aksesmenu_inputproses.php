<?php
    include "../connect.php";

    $no_menu = $_POST['no_menu'];
    $no_tenant = $_POST['no_tenant'];
    $jenis_menu = $_POST['jenis_menu'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    
    $target_dir = "C:/xampp/htdocs/Foodcourt/assets/img/menu/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);

    $foto = basename($_FILES["foto"]["name"]);
    

    $sql = "INSERT INTO tbl_menu(no_menu, no_tenant, foto, jenis_menu, nama, deskripsi, harga, aktif)
    VALUES ('$no_menu','$no_tenant', '$foto', '$jenis_menu', '$nama', '$deskripsi', 0, 1)";

    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
        echo "<meta http-equiv='refresh' content='0; url=../my.php?p=aksesmenu'>";
    } else {
        echo "<meta http-equiv='refresh' content='0; url=my.php?p=aksesmenu_input'>";
        echo "<script>alert('Anda Gagal Menyimpan Data, Silahkan melakukan input data sekali lagi...');</script>";
    }

    mysqli_close($conn);
?>