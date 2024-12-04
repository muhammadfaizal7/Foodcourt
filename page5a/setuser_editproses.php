<?php
    include "../connect.php";

    $id = $_GET['id'];
    $foto = $_GET['foto'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $author = $_POST['aut'];

$author = ($_POST['author'] == '') ? $author : $_POST['author'];
    if(basename($_FILES["foto"]["name"])==''){
        $fotosv = $foto;
    } else {
        $target_dir = "C:/xampp/htdocs/webApp-5A/image/";
        $target_file = $target_dir . basename($_FILES["foto"]["name"]);
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
        $foto = basename($_FILES["foto"]["name"]);
    }
    $sql = "UPDATE t_user SET
        nama='$nama',
        username='$username',
        password='$password',
        authorized='$author',
        foto='$foto'
        WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "<meta http-equiv='refresh' content='0; url=../my.php?p=setuser'>";
    } else {
        echo "<meta http-equiv='refresh' content='0; url=my.php?p=setuser_input'>";
        echo "<script>alert('Anda Gagal Menyimpan Data, Silahkan melakukan input data sekali lagi...');</script>";
        
    }

    mysqli_close($conn);
