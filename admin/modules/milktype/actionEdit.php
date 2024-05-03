<?php
require_once __DIR__."/../../autoload/autoload.php";

  $id = $_POST['id'];
  $nameS = $_POST['nameS'];
  $nameHS = $_POST['nameHS'];
  $typeS = $_POST['typeS'];
  $weight = $_POST['weight'];
  $price = $_POST['price'];
  $nutrition = $_POST['nutrition'];
  $benefits = $_POST['benefits'];
  $img = $_POST['img'];
  $sql = "update milktype set nameS = '$nameS',nameHS = '$nameHS', typeS = '$typeS',
  weight = '$weight', price = '$price',nutrition = '$nutrition',benefits = 'benefits',img = '$img'  WHERE id = '$id'";
  if( mysqli_query($conn,$sql)){
      $_SESSION['success'] = "Sửa thành công";
      echo "<script>location.href='index.php';</script>";
      exit();
  }else{
      $_SESSION['error'] = "Sửa thất bại";
  }
 ?>
