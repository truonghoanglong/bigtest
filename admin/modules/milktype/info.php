<?php
  require_once __DIR__."/../../autoload/autoload.php";

  $idd = $_GET["id"];
  $sql = "SELECT * FROM milktype WHERE id = $idd";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);
 ?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>
                <!-- Page Heading -->
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              Thông tin sản phẩm

          </h1>
          <ol class="breadcrumb">
              <li>
                  <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
              </li>
              <li> <a href="#">loại sữa</a> </li>
              <li class="active">
                  <i class="fa fa-file"></i> Thông tin
              </li>
          </ol>
          <form id="all">
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
        			<tr align="center"><td colspan="2"><?php echo $row["nameS"]; ?> - <?php
                    if($row["nameHS"] == 0)
                          echo "Vinamilk";
                    else if($row["nameHS"] == 1)
                          echo "Dutch Lady" ;
                    else if($row["nameHS"] == 2)
                          echo "Nutifood" ;
                    else if($row["nameHS"] == 3)
                          echo "Nestle" ;
                    else if($row["nameHS"] == 4)
                          echo "IDP" ;
                    else if($row["nameHS"] == 5)
                          echo "Mộc châu" ;
                    else if($row["nameHS"] == 6)
                          echo "TH true milk" ;
                    else
                          echo "Abbott" ;
                  ?></td></tr>
        			<tr>
        				<td><img src="../img/<?php echo $row["img"]; ?>" width="200px"></td>
        				<td rowspan="2">Thành phần dinh dưỡng:<br>
        					<?php echo $row["nutrition"]; ?><br> <p>Lợi ích</p>
        					<?php echo $row["benefits"]; ?>
        				</td>
        			</tr>
        			<tr>
                <td><a href="index.php">Quay về</a></td>

              </tr>
        		</table>
            </div>
            </div>
            </div>
        	</form>
      </div>
  </div>
                <!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>
