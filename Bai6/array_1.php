<!DOCTYPE html>
<html>
<head>
	<title>Nhập và tính toán trên dãy số</title>
	<meta charset="utf-8">
	<style>
	*{
    	font-family: Tahoma;
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	table{
	    width: 400px;
	    margin: 100px auto;
	}
	table th{
	    background: #66CCFF;
	    padding: 10px;
	    font-size: 18px;
	}
	table {
		border: 1px solid #111;
		border-radius: 5px;
	}
	.title {
		border-radius: 5px 5px 0 0;
	}
	input {
		width: 100%;
	}
	</style>
</head>

<?php
	if(isset($_POST['btn_goi'])){
		$sum = 0;
		$array_int = 0;
		$array_int = explode(",", $_POST['nhap_mang']);
		$n = count($array_int);
		foreach($array_int as $i){
			$sum += $i;
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
					<td><input type="text" name="ket_qua" disabled="disabled" value="<?php if(isset($sum)){echo htmlspecialchars($sum);}?>" ></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>

