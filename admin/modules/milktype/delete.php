<?php
require_once __DIR__."/../../autoload/autoload.php";
$sl = "DELETE FROM milktype WHERE id = '".$_GET["id"]."'";
  if(mysqli_query($conn, $sl)) {
      $_SESSION['success'] = "Xóa thành công";
      echo "<script>location.href='index.php';</script>";
  }else {
    $_SESSION['error'] = "Xóa thất bại";
    echo "<script>location.href='index.php';</script>";
  }
 ?>
