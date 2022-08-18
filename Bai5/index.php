<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Giải PT Bậc 2</title>
</head>
<?php
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $x1 = $x2 = 0;
        // $error_msg = '';
        if(is_numeric($a) && is_numeric($b) && is_numeric($c)) {
            function solveEquation($a, $b, $c) {
                $delta = $b**2 - 4*$a*$c;
                if($delta < 0) {
                    return "Phương trình vô nghiệm";
                } else if($delta == 0) { 
                    $x1 = (-$b)/(2*$a);
                    return "x1 = x2 = $x1";
                } else if($delta > 0) {
                    $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
                    $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
                    return "x1 = $x1, x2 = $x2";
                }
            };
            $result = solveEquation($a, $b, $c);
        } else if (is_numeric($a) == false) {
            $result = "a phải là số.";
        } else if (is_numeric($b)== false) {
            $result = "b phải là số.";
        } else if (is_numeric($c) == false) {
            $result = "c phải là số.";
        }
    };
?>
<body>
    <form action="index.php" method="post">
        <table width="806" border="1">
            <tr>
                <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
            </tr>
            <tr>
                <td width="83">Phương trình </td>
                <td width="236">
                    <input name="a" type="text" id="textfield" value="<?php if(isset($_POST["a"])) {echo $a;} ?>" />
                    X^2 +
                </td>
                <td width="218"><label for="textfield3"></label>
                    <input type="text" name="b" id="textfield" value="<?php if(isset($_POST["b"])) {echo $b;} ?>" />
                    X+
                </td>
                <td width="241"><label for="textfield"></label>
                    <input type="text" name="c" id="textfield" value="<?php if(isset($_POST["c"])) {echo $c;} ?>" />
                    =0
                </td>
            </tr>
            <tr>
                <td colspan="8">
                    <label for="textfield2">Nghiệm: </label>
                    <input name="textfield" type="text" id="textfield2" style="width: 660px;" value="<?php if(isset($result)) {echo htmlspecialchars($result);} ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>
</html>