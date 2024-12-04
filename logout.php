<?php

    include "connect.php";
    session_unset();

    session_destroy();

    $conn->close();

    echo "<meta http-equiv='refresh' content='0; url=index.php'>";