<?php 
    $server = $_SERVER['SERVER_NAME'];
    $user = "root";
    $password = "";
    $db = "udn";
    $con = mysqli_connect($server, $user, $password, $db);
    mysqli_query($con, "set names 'utf8'");
?>