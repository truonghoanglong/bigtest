<?php
  require_once __DIR__."/../../autoload/autoload.php";
 ?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>
                <!-- Page Heading -->
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              Khách hàng
          </h1>
          <ol class="breadcrumb">
              <li>
                  <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
              </li>
              <li class="active">
                  <i class="fa fa-file"></i> updateCUS
              </li>
          </ol>
          <div class="clearfix">

          </div>
          <?php require_once __DIR__."/../../../libraries/Function.php"; ?>
      </div>
  </div>
<?php
	$id = $_GET['id']	;

	$fi = "select * from customer where id = '$id'";
	$qr=mysqli_query($conn,$fi) or die("Fail sua1");
	$rs=mysqli_fetch_array($qr);
?>


	<form action="capnhat.php" method="post">
	<table border="1">

			<tr><td colspan="2" align="center" style="background: #87ceeb">CẬP NHẬT NGƯỜI DÙNG</td></tr>
			<input type="hidden" name="id" value="<?php echo $id;?>">
			<tr>
				<td> Tên khách hàng </td>
				<td><input type="text" name="tenkh" required="" value="<?php echo $rs['nameKH'];?>"><br></td>
			</tr>
			<tr>
				<td> Giới tính </td>
				<td><input type="radio" value="1" name="rdoSex">Nam <input type="radio" value="0" name="rdoSex" checked  value="<?php echo $rs['sex'];?>">Nữ</td>
			</tr>
			<tr>
				<td> Địa chỉ: </td>
				<td><input type="text" name="diachi" value="<?php echo $rs['addressKH'];?>"><br></td>
			</tr>
			<tr>
				<td> Số điện thoại </td>
				<td><input type="number" name="sdt" value="<?php echo $rs['phoneKH'];?>"><br></td>
			</tr>
			<tr>
				<td> Email</td>
				<td><input type="text" name="email" value="<?php echo $rs['emailKH'];?>"><br></td>
			</tr>

	</table>
	<input type="submit" value=" Cập nhật người dùng  ">
</form>

<?php require_once __DIR__."/../../layouts/footer.php"; ?>
