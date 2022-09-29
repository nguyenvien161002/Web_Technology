<?php
    $op = $_GET['chon'];
    if ($op != "") {
        include("database.class.php");
        $db = new db("root", "", "udn");
        $sql = "select * from {$op}";
        $header = "Danh sách {$op}";
        $db -> table($sql, $header);
    }
?>