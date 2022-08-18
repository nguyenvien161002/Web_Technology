<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nhập và tính toán dãy số trên</title>
	<link rel="stylesheet" href="./css/array_1.css">
</head>
<?php
	if(isset($_POST['btn_goi'])){
		if($_POST['nhap_mang']) {
			$sum = 0;
			$array_int = 0;
			$array_int = explode(",", $_POST['nhap_mang']);
			$n = count($array_int);
			foreach($array_int as $i){
				$sum += $i;
			}
		} else {
			$error_message = "Please enter the number";
		}
	}
?>
<body>
	<form method="POST" action="array_1.php">
		<table>
			<thead>
				<tr>
					<th  class = "title" colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nhập dãy số:</td>
					<td><input type="text" name="nhap_mang" value="<?php if(isset($_POST["nhap_mang"])) {echo $_POST['nhap_mang'];}?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="btn_goi" value="Tổng dãy số" ></td>
				</tr>
				<tr>
					<td>Tổng dãy số:</td>
					<td><input type="text" name="ket_qua" disabled="disabled" value="<?php if (isset($sum)) {echo htmlspecialchars($sum), $error_message;} else if(isset($error_message)) {echo $error_message;}?>" ></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>



