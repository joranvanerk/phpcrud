<?php

    // database connectie opzetten
    include("connect_db.php");

    $id = intval($_GET["id"]);

    $sql = "DELETE FROM `users` WHERE `id` = $id";

    mysqli_query($conn, $sql);

    header("Location: ./read.php")

?>