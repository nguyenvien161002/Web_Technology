<?php
    require "vendor/autoload.php";
    $dbname = 'dbFirst';
    try {	
        $m = new MongoDB\Client("mongodb+srv://dbTest:dbTest@cluster0.gojpbsq.mongodb.net/?retryWrites=true&w=majority");
        $db = $m->$dbname;
        echo "Thành công!";
    }
    catch(Exception $ex) {
        print $ex;
        header("location:../error.html");
    }
?>