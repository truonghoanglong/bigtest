<?php
	$id = $_GET['id'];

  require_once __DIR__."/../../autoload/autoload.php";
	$fi = "delete from customer where id = '$id'";
	$qr=mysqli_query($conn,$fi) or die("Fail connect");

	if($qr){
		header("location: index.php");
	}
?>
