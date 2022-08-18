<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Tính toán</title>
</head>
<?php
    if (isset($_POST['so_cuoi']) && $_POST['so_cuoi']) {
        $sum = 0;
        $mul = 1;
        $sum_even = 0;
        $sum_odd = 0;
        $error_message = '';
        $first_number = $_POST['so_dau'];
        $last_number = $_POST['so_cuoi'];
        if($first_number>$last_number) {
            $error_message = 'The first number must be less than the last number.';
        }
        for($i=$first_number; $i<=$last_number; $i++) { 
            $sum += $i;
            $mul *= $i;
            if($i % 2 == 0) {
                $sum_even += $i;
            } else {
                $sum_odd += $i;
            } 
        }
    }
?>
<body>
    <form action="#" method="post">
        <table width="728" border="1">
            <tr>
                <td width="122">&nbsp;</td>
                <td width="76">Số bắt đầu</td>
                <td width="169"><label for="textfield"></label>
                    <input type="text" name="so_dau" id="textfield" value="<?php if(isset($_POST['so_dau'])) {echo $first_number;}?>" />
                </td>
                <td width="152">Số kết thúc</td>
                <td width="175"><label for="textfield2"></label>
                    <input type="text" name="so_cuoi" id="textfield2" value="<?php if(isset($_POST['so_cuoi'])) {echo $last_number;}?>" />
                </td>
            </tr>
            <tr>
                <p style="color: red;"><?php if(isset($error_message)) {echo $error_message;}?></p>
            </tr>
            <tr>
                <td colspan="5">Kết quả
                    <label for="textfield3"></label>
                </td>
            </tr>
            <tr>
                <td>Tổng các số</td>
                <td colspan="4"><label for="textfield4"></label>
                    <input type="text" name="tong" id="textfield4" value="<?php if(isset($sum)) {echo $sum;}?>" />
                </td>
            </tr>
            <tr>
                <td>Tích các số</td>
                <td colspan="4"><label for="textfield5"></label>
                    <input type="text" name="tich" id="textfield5" value="<?php if(isset($mul)) {echo $mul;}?>" />
                </td>
            </tr>
            <tr>
                <td>Tổng các số chẵn</td>
                <td colspan="4"><label for="textfield6"></label>
                    <input type="text" name="tong_chan" id="textfield6" value="<?php if(isset($sum_even)) {echo $sum_even;}?>" />
                </td>
            </tr>
            <tr>
                <td>Tổng các số lẻ</td>
                <td colspan="4"><label for="textfield7"></label>
                    <input type="text" name="tong_le" id="textfield7" value="<?php if(isset($sum_odd)) {echo $sum_odd;}?>" />
                </td>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" name="button" id="button" value="Tính toán" /></td>
            </tr>
        </table>
    </form>
</body>
</html>