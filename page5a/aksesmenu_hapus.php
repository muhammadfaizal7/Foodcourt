<?php
    include"connect.php";

        $id = $_GET['id'];
    $sql = "UPDATE tbl_menu SET aktif=0 WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<meta http-equiv='refresh' content='0;url=my.php?p=aksesmenu'>";
    }