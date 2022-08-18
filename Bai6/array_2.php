<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Phát sinh mảng và tính toán</title>
	<link rel="stylesheet" href="./css/array_1.css">
</head>
<?php
	if(isset($_POST["so_phan_tu"])){
		$n = $_POST["so_phan_tu"];
		$array_int = array($n);
		for($i=0; $i<$n; $i++){
			$array_int[$i] = mt_rand(0, 50);
		}
		function getArrayInt($array_int) { 
			return implode(", " ,$array_int);
		}
		function findMin($array_int) { 
			global $n;
			$MIN = $array_int[0];
			for($i=0; $i<$n; $i++){
				if($MIN > $array_int[$i]) {
					$MIN =  $array_int[$i];
				}
			}
			return $MIN;
		}
		function findMax($array_int) { 
			global $n;
			$MAX = $array_int[0];
			for($i=0; $i<$n; $i++){
				if($MAX < $array_int[$i]) {
					$MAX =  $array_int[$i];
				}
			}
			return $MAX;
		}
		function sumArray($array_int) { 
			global $n;
			$SUM = 0;
			for($i=0; $i<$n; $i++){
				$SUM += $array_int[$i];
			}
			return $SUM;
		}
	} else {
		$error_message = "Vui lòng nhập số phần tử";
	}

?>

<body>
	<form action="array_2.php" method="POST">
		<table>
			<thead>
				<tr>
					<th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Nhập số phần tử:</td>
					<td><input type="text" name="so_phan_tu" width="100%" value="<?php if(isset($_POST["so_phan_tu"])) {echo $n;}?>" ></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Phát sinh và tính toán"></td>
				</tr>
				<tr>
					<td>Mảng: </td>
					<td><input type="text" name="mang_so" disabled="disabled" value="<?php if(isset($array_int)){echo getArrayInt($array_int);}?>"></td>
				</tr>
				<tr>
					<td>GTLN ( MAX ) trong mảng: </td>
					<td><input type="text" name="gtln" disabled="disabled" value="<?php if(isset($array_int)){echo findMax($array_int);} ?>"></td>
				</tr>
				<tr>
					<td>GTNN ( MIN ) trong mảng: </td>
					<td><input type="text" name="ttnn" disabled="disabled" value="<?php if(isset($array_int)){echo findMin($array_int);} ?>"></td>
				</tr>
				<tr>
					<td>Tổng mảng: </td>
					<td><input type="text" name="tong" disabled="disabled" value="<?php if(isset($array_int)){echo sumArray($array_int);} ?>"></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
