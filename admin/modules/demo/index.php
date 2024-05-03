<?php
  require_once __DIR__."/../../autoload/autoload.php";
 ?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>
                <!-- Page Heading -->

  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              Demo sản phẩm

          </h1>
          <ol class="breadcrumb">
              <li>
                  <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
              </li>
              <li class="active">
                  <i class="fa fa-file"></i> Demo
              </li>
          </ol>
          <?php
          $sql = "SELECT * FROM milktype";
          $result = mysqli_query($conn,$sql); 
           ?>
          <?php $stt = 1; while ($item = mysqli_fetch_assoc($result)){ ?>
          <div class="row" style="float:left;">
            <div class="col-sm-6 col-md-4" style="width:280px;height:350px; margin-left:15px;">
              <div class="thumbnail">
                <img src="../img/<?php echo $item["img"]; ?>" style="width: auto; height: auto;max-width: 180px;max-height: 100px" alt="...">
                <div class="caption">
                  <h3> <b><?php echo $item["nameS"]; ?></b> </h3>
                  <p>Nhà sản xuất: <?php
                if($item["nameHS"] == 0)
                      echo "Vinamilk";
                else if($item["nameHS"] == 1)
                      echo "Dutch Lady" ;
                else if($item["nameHS"] == 2)
                      echo "Nutifood" ;
                else if($item["nameHS"] == 3)
                      echo "Nestle" ;
                else if($item["nameHS"] == 4)
                      echo "IDP" ;
                else if($item["nameHS"] == 5)
                      echo "Mộc châu" ;
                else if($item["nameHS"] == 6)
                      echo "TH true milk" ;
                else
                      echo "Abbott" ;
                      ?> <br> <?php
                    if($item["typeS"] == 0)
                          echo "Sữa tươi không đường";
                    else if($item["typeS"] == 1)
                          echo "Sữa tươi có đường" ;
                    else if($item["typeS"] == 2)
                          echo "Sữa chua" ;
                    else
                          echo "Sữa bột" ;
                    ?> - <?php echo $item["weight"]; ?> <br> <b><?php echo $item["price"]; ?></b>   </p>
                  <p><a href="#" class="btn btn-primary" role="button">Buy now</a> <a href="#" class="btn btn-default" role="button"><i class="fa fa-shopping-cart"></i>
Add to cart</a></p>
                </div>
              </div>
            </div>
          </div>
          <?php $stt++ ; }; ?>
      </div>
  </div>
                <!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>
