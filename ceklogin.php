<?php
    include "connect.php";

    $author= $_POST['author'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM t_user WHERE username='$user' AND password='$pass' AND authorized='$author'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        
        session_start();

        while($row = mysqli_fetch_assoc($result)){
            $_SESSION["identity"] = $row["identity"];
            $_SESSION["nama"] = $row['nama'];
            $_SESSION["user"] = $row['username'];
            $_SESSION["foto"] = $row['foto'];
            $_SESSION["author"] = $row['authorized'];

        }
        
        echo "<meta http-equiv = 'refresh' content='0; url =my.php'>";
    }else {
        echo "<meta http-equiv = 'refresh' content='0; url =index.php'>";
        echo "<script>alert('Anda tidak punya akses kedalam sistem .....');</script>";
    }

    mysqli_close($conn);

