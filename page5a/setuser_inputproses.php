<?php
    include "../connect.php";

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $identity = $_POST['identity'];
    $author = $_POST['author'];
    
    $target_dir = "C:/xampp/htdocs/Foodcourt/assets/img/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);

    $foto = basename($_FILES["foto"]["name"]);
    

    $sql = "INSERT INTO t_user(identity,nama, Username, Password, Authorized, foto, aktif)
    VALUES ('$identity','$nama', '$username', '$password', '$author', '$foto', 1)";

    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
        echo "<meta http-equiv='refresh' content='0; url=../my.php?p=setuser'>";
    } else {
        echo "<meta http-equiv='refresh' content='0; url=my.php?p=setuser_input'>";
        echo "<script>alert('Anda Gagal Menyimpan Data, Silahkan melakukan input data sekali lagi...');</script>";
    }

    mysqli_close($conn);
