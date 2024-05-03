<?php
  require_once __DIR__."/../../autoload/autoload.php";
 ?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>
                <!-- Page Heading -->
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              Loại sữa
              <a href="add.php" class="btn btn-success">Thêm mới</a>
          </h1>
          <ol class="breadcrumb">
              <li>
                  <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
              </li>
              <li class="active">
                  <i class="fa fa-file"></i> milktype
              </li>
          </ol>
          <div class="clearfix">

          </div>
          <?php require_once __DIR__."/../../../libraries/Function.php"; ?>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <?php

            $showRecordPerPage = 5;
            if(isset($_GET['page']) && !empty($_GET['page'])){
            $currentPage = $_GET['page'];
            }else{
            $currentPage = 1;
            }
            $startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
            $totalEmpSQL = "SELECT * FROM milktype";
            $allEmpResult = mysqli_query($conn, $totalEmpSQL);
            $totalEmployee = mysqli_num_rows($allEmpResult);
            $lastPage = ceil($totalEmployee/$showRecordPerPage);
            $firstPage = 1;
            $nextPage = $currentPage + 1;
            $previousPage = $currentPage - 1;
            $sql = "SELECT *
            FROM `milktype` LIMIT $startFrom, $showRecordPerPage";
            $result = mysqli_query($conn, $sql);
            ?>
          <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td>STT</td>
                  <td>Tên sữa</td>
                  <td>Tên hãng sữa</td>
                  <td>Loại sữa</td>
                  <td>Thể tích sữa</td>
                  <td>Giá</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
                <?php $stt = 1; while($item = mysqli_fetch_assoc($result)){ ?>
                  <tr>
                      <td><?php echo $stt ?></td>
                      <td><?php echo $item['nameS'] ?></td>
                      <td><?php
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
                          ?>
                      </td>
                      <td><?php
                    if($item["typeS"] == 0)
                          echo "Sữa tươi không đường";
                    else if($item["typeS"] == 1)
                          echo "Sữa tươi có đường" ;
                    else if($item["typeS"] == 2)
                          echo "Sữa chua" ;
                    else
                          echo "Sữa bột" ;
                    ?></td>
                      <td><?php echo $item['weight'] ?></td>
                      <td><?php echo $item['price'] ?></td>
                      <td>
                        <a class="btn btn-xs btn-info" href="edit.php?id=<?php echo $item['id'] ?>"> <i class="fa fa-edit"></i> Sửa</a>
                        <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $item['id'] ?>" onclick="return confirm('Chắc chắn muốn xóa?');"> <i class="fa fa-times"></i> Xóa</a>
                        <a class="btn btn-xs btn-success" href="info.php?id=<?php echo $item['id'] ?>"> thông tin</a>
                        <a href="#"></a>
                      </td>
                  </tr>
                <?php $stt++ ; } ?>

              </tbody>
          </table>
          <div class="pull-right">
              <nav aria-label="Page navigation">
              <ul class="pagination">
              <?php if($currentPage != $firstPage) { ?>
              <li class="page-item">
              <a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
              <span aria-hidden="true">First</span>
              </a>
              </li>
              <?php } ?>
              <?php if($currentPage >= 2) { ?>
              <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
              <?php } ?>
              <li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
              <?php if($currentPage != $lastPage) { ?>
              <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
              <li class="page-item">
              <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
              <span aria-hidden="true">Last</span>
              </a>
              </li>
              <?php } ?>
              </ul>
              </nav>
            </div>
          <!--<div class="pull-right">
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>-->

    </div>

    </div>
  </div>
                <!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>
