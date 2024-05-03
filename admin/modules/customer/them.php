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
                  <i class="fa fa-file"></i> addCUS
              </li>
          </ol>
          <div class="clearfix">

          </div>
          <?php require_once __DIR__."/../../../libraries/Function.php"; ?>
      </div>
  </div>

	<form action="add.php" method="post">
	<table border="1">
			<tr><td colspan="2" align="center" style="background: #87ceeb">THÊM NGƯỜI DÙNG</td></tr>
			<tr>
				<td> Tên khách hàng </td>
				<td><input type="text" name="tenkh" required=""></td>
			</tr>
			<tr>
				<td> Giới tính </td>
				<td width="10px"><input type="radio" value="1" name="rdoSex">Nam <input type="radio" value="0" name="rdoSex" checked required="">Nữ</td>
			</tr>
			<tr>
				<td> Địa chỉ: </td>
				<td><input type="text" name="diachi"></td>
			</tr>
			<tr class="trr">
				<td> Số điện thoại </td>
				<td><input type="number" name="sdt"></td>
			</tr>
			<tr>
				<td> Email</td>
				<td><input type="text" name="email"></td>
			</tr>

	</table>
	<input type="submit" value=" Thêm người dùng ">
</form>

<?php require_once __DIR__."/../../layouts/footer.php"; ?>
