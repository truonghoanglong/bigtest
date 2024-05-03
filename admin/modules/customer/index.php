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
                  <i class="fa fa-file"></i> customer
              </li>
          </ol>
          <div class="clearfix">

          </div>
          <?php require_once __DIR__."/../../../libraries/Function.php"; ?>
      </div>
  </div>
<?php
	$sql = "select * from customer";
	$qr=mysqli_query($conn,$sql) or die("Fail connect");
?>

	<table border="1">
		<tr><td colspan="8" align="center" style="background: #87ceeb">THÔNG TIN KHÁCH HÀNG</td></tr>
		<tr>
			<td> STT </td>
			<td> Tên khách hàng </td>
			<td> Giới tính </td>
			<td> Địa chỉ </td>
			<td> Số điện thoại </td>
			<td> Email</td>
			<td colspan="2"> <a href='them.php'> Thêm </a></td>

		</tr>
		<?php
			$i = 1;
			while($rs=mysqli_fetch_array($qr)){
				?>
				<tr>
				<td> <?php echo $i ?></td>
				<td> <?php echo $rs["nameKH"]?></td>
				<td> <?php if($rs["sex"] == 1){
					echo "Nam";
				}
				else
				{
					echo "Nữ";
				}
				?></td>
				<td> <?php echo $rs["addressKH"] ?></td>
				<td> <?php echo $rs["phoneKH"] ?></td>
				<td> <?php echo $rs["emailKH"] ?></td>

				<td> <a href='sua.php?id=<?php echo $rs['id']?>'> sửa </a> <a href='xoa.php?id=<?php echo $rs['id'] ?>' onclick="return confirm('bạn muốn xóa khách hàng này?');"> xóa </a> </td>
				</tr>
				<?php
				$i++;
		}
	?>

	</table>

<?php require_once __DIR__."/../../layouts/footer.php"; ?>
