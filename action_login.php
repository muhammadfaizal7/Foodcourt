<?php
    include "connect.php";

    $username = $_POST["user"];
    $password = $_POST["pass"];

$query = "select * from t_user where username = '$username' and password = '$password'";

$hasil = mysqli_query($conn,$query);
if ($hasil->num_rows > 0) {
    echo"<meta http-equiv='refresh' content='0;url=my.php'>";
}else{
    echo"<meta http-equiv='refresh' content='0;url=index.php'>";
    echo"<script>alert('Anda Gagal Log In');</script>";
}
$conn->close();