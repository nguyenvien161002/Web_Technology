<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chào các bạn</title>
</head>
<?php
    if(isset($_POST['a']) && isset($_POST['b'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $result;
        if ($a == 0) {
            if($b == 0) {
                $result = "Phương trình vô số nghiệm";
            } elseif ($b != 0 ) {
                $result = "Phương trình vô nghiệm";
            }
        } else {
            $result = -$b / $a;
            $result = round($result, 2);
        }
    }
?>
<body>
    <form action="index.php" method="post">
        <table width="744" border="1">
            <tr>
                <td colspan="3" bgcolor="#336699"><strong>Giải phương trình bậc 1 </strong></td>
            </tr>
            <tr>
                <td width="120">Phương trình </td>
                <td width="250">
                    <input name="a" type="text" />
                    x +
                </td>
                <td width="352"><label for="textfield"></label>
                    <input name="b" type="text" id="textfield" />
                    = 0
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Nghiệm
                    <label for="textfield2"></label>
                    <input name="kq" type="text" id="textfield2" value="<?php 
                        if(isset($result)) {
                            echo $result;
                        }
                    ?>"/>
            </tr>
            <tr>
                <td colspan="3" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
