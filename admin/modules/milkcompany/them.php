<?php
  require_once __DIR__."/../../autoload/autoload.php";
 ?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>
                <!-- Page Heading -->
                <head>
                  <link rel="stylesheet" href="css/them.css">
                </head>

  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              Hãng sữa
          </h1>
          <ol class="breadcrumb">
              <li>
                  <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
              </li>
              <li class="breadcrumb">
                  <i class="fa fa-file"></i> milkCO
              </li>
              <li class="active">
                  <i class="fa fa-file"></i> addMC
              </li>
          </ol>
          <div class="clearfix">

          </div>
          <?php require_once __DIR__."/../../../libraries/Function.php"; ?>
      </div>
  </div>
<?php
        $idHS = "";
        $nameHS = "";
        $addressHS = "";
        $phoneHS = "";
	      $emailHS = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["MaHS"])) { $idHS = $_POST['MaHS']; }
            if(isset($_POST["TenHS"])) { $nameHS = $_POST['TenHS']; }
            if(isset($_POST["DiaChi"])) { $addressHS = $_POST['DiaChi']; }
            if(isset($_POST["DienThoai"])) { $phoneHS = $_POST['DienThoai']; }
			      if(isset($_POST["Email"])) { $emailHS = $_POST['Email']; }
            $sl = "INSERT INTO milkCO (idHS, nameHS, addressHS, phoneHS, emailHS)
            VALUES ('$idHS', '$nameHS', '$addressHS', '$phoneHS', '$emailHS')";

            if ($conn->query($sl) === TRUE) {

                echo "<script language='javascript'>alert('Thêm thành công');";
                echo "location.href='index.php';</script>";
            } else {
                echo "Error: " . $sl . "<br>" . $conn->error;
            }
        }
    ?>
    <form method="POST" class="container">
        <h2>Thêm Thông Tin Hãng Sữa</h2>
        <table class="tb">
          <tr>
            <td>Nhập mã HS:</td>
            <td><input type="text" name="MaHS"></td>
          </tr>
          <tr>
            <td>Nhập tên HS:</td>
            <td><input type="text" name="TenHS"></td>
          </tr>
          <tr>
            <td>Nhập địa chỉ:</td>
            <td><input type="text" name="DiaChi"></td>
          </tr>
          <tr>
            <td>Nhập số điện thoại:</td>
            <td><input type="text" name="DienThoai"></td>
          </tr>
          <tr>
            <td>Nhập Email:</td>
            <td><input type="text" name="Email"></td>
          </tr>
          <tr>
            <td><input class="button button1" type="submit" value="Thêm"></td>
          </tr>
        </table>

    </form>
<?php require_once __DIR__."/../../layouts/footer.php"; ?>
