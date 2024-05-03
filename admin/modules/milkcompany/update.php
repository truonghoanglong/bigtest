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
									<i class="fa fa-file"></i> updateMC
							</li>
          </ol>
          <div class="clearfix">

          </div>
          <?php require_once __DIR__."/../../../libraries/Function.php"; ?>
      </div>
  </div>
  <?php
	    $idd = $_GET["Idd"];
			$sql = "SELECT * FROM milkco WHERE id = $idd";
	    $result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
	 ?>
	 <form  method="POST" class="container" action="update2.php">
			 <h2>Thêm Thông Tin Hãng Sữa</h2>
			 <table class="tb">
				 <tr>
					 <td>Nhập mã HS:</td>
					 <td><input type="text" name="idHS" value="<?php echo $row["idHS"];?>"></td>
				 </tr>
				 <tr>
					 <td>Nhập tên HS:</td>
					 <td><input type="text" name="nameHS" value="<?php echo $row["nameHS"];?>"></td>
				 </tr>
				 <tr>
					 <td>Nhập địa chỉ:</td>
					 <td><input type="text" name="addressHS" value="<?php echo $row["addressHS"];?>"></td>
				 </tr>
				 <tr>
					 <td>Nhập số điện thoại:</td>
					 <td><input type="text" name="phoneHS" value="<?php echo $row["phoneHS"];?>"></td>
				 </tr>
				 <tr>
					 <td>Nhập Email:</td>
					 <td><input type="text" name="emailHS" value="<?php echo $row["emailHS"];?>"></td>
				 </tr>
				 <tr>
       			<td></td>
        			<td><input type="hidden" name="id" value="<?php echo $row["id"];?>"></td>
    			 </tr>
					 <tr >
	 					<td colspan="2"><input class="button button1" type="submit" value="Cập nhật"> </td>
	 				</tr>
			 </table>

	 </form>


<?php require_once __DIR__."/../../layouts/footer.php"; ?>
