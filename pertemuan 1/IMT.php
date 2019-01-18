<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><form    methot="get" action="">
Jenis kelamin<br>
<input type="radio" name="laki">laki<br>
<input type="radio" name="perempuan">perempuan<br>
</select><br>
Tinggi badan (cm) <br>
<input type="text" name="tb"><br>
Berat badan (kg)<br>
<input type="text" name="bb"><br>
<input type="submit" name="submit" value="Hitung BMI">
</form>
</body>
</html>
<?php
include 'bb.php';
class beratbadan{
$hasil = new beratbadan;
if (isset($_POST['submit'])) {
	$hasil-> beratideal($_POST['tinggi'],$_POST['beratbadan'],$_POST['jk']);
	echo $hasil-> beratideal();
	# code...
}
}


?>
