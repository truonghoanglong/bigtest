<?php
	$id = $_POST['id'];
	$t = $_POST['tenkh'];
	$gt = $_POST['rdoSex'];
	$dc = $_POST['diachi'];
	$dt = $_POST['sdt'];
	$email = $_POST['email'];

  require_once __DIR__."/../../autoload/autoload.php";
	$fa = "update customer set nameKH = '$t',sex = '$gt',addressKH = '$dc',phoneKH = '$dt',emailKH = '$email' where id ='$id'";
	$qr=mysqli_query($conn,$fa) or die("Fail connect");

	if($qr){
		header("location: index.php");
	}
?>
