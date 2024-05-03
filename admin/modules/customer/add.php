<?php
	$m = $_POST['makh'];
	$t = $_POST['tenkh'];
	$gt = $_POST['rdoSex'];
	$dc = $_POST['diachi'];
	$dt = $_POST['sdt'];
	$email = $_POST['email'];

  require_once __DIR__."/../../autoload/autoload.php";
	$fi = "insert into customer(id,nameKH,sex,addressKH,phoneKH,emailKH) values('$m','$t','$gt','$dc','$dt','$email')";
	$qr=mysqli_query($conn,$fi) or die("Fail connect");

	if($qr){
		header("location: index.php");
	}
?>
