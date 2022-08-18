<!DOCTYPE html>
<html>
<head>
	<title>ĐẾM SỐ LẦN XUẤT HIỆN VÀ TẠO MẢNG DUY NHẤT</title>
	<meta charset="utf-8">
	<style>
	*{
    	font-family: Tahoma;
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	table{
	    width: 320px;
	    margin: 100px auto;
        border: 1px solid #111;
		border-radius: 5px;
	}
	table th{
	    background: #66CCFF;
	    padding: 10px;
	    font-size: 18px;
	}
    input{
        width: 100%;
    }
    th[colspan] {
		border-radius: 5px 5px 0 0;
	}
	</style>
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
