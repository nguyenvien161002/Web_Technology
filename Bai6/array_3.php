<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đếm số lần xuất hiện và tạo mảng duy nhất</title>
	<link rel="stylesheet" href="./css/array_1.css">
</head>
<?php
    if(isset($_POST['nhap_mang'])){
        $array_int = explode(",",$_POST['nhap_mang']);
        // count occurrences of element
        $cooe = array_count_values($array_int);
        function countElement($cooe) {
            foreach($cooe as $key => $value){ 
                echo $key . ":" . $value . " | ";
            }
        }
        $array_uniq = array_unique($array_int);
        function arrayUnique($array_uniq) {
            echo implode(",",$array_uniq);
        }
    }
?>

<body>
	<form action="array_3.php" method="POST">
		<table border="0">
			<thead>
				<tr>
					<th colspan="2">ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Mảng:</td>
					<td><input type="text" name="nhap_mang" value="<?php if(isset($_POST['nhap_mang'])){ echo $_POST['nhap_mang']; }?>" ></td>
				</tr>
				<tr>
					<td>Số lần xuất hiện:</td>
					<td><input type="text" name="so_lan_xuat_hien" value="<?php if(isset($_POST['nhap_mang'])){ countElement($cooe); } ?>" ></td>
				</tr>
				<tr>
					<td>Mảng duy nhất:</td>
					<td><input type="text" name="mang_duy_nhat" value="<?php if(isset($_POST['nhap_mang'])){ arrayUnique($array_uniq); } ?>" ></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="Thực hiện"></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>