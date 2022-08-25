<?php
    include("../connect.php");
    if(isset($_GET["idTL"]))
    {
        $key=$_GET["idTL"];
    }
    $sql="Select icon from theloai where idTL=$_GET[idTL]";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    unlink("../images/$data[icon]");
    $sl="delete from theloai where idTL=".$_GET["idTL"];
    if(mysqli_query($connect,$sl))
    {
        echo "<script language='javascript'>alert('Xóa thành công');";
        echo "location.href='theloai.php';</script>";
    }
?>
