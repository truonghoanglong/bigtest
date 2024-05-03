<?php

  require_once __DIR__."/../../autoload/autoload.php";

 ?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>
  <!-- Page Heading -->
  <?php
    $idd = $_GET["id"];
    $sql = "SELECT * FROM milktype WHERE id = $idd";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
   ?>
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              Chỉnh sửa danh mục
          </h1>
          <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a></li>
              <li><a href="">milktype</a></li>
              <li class="active"><i class="fa fa-file"></i> addMT</li>
          </ol>
      </div>
  </div>
  <div class="row">
    <div class="col-md-12">
            <form class="form-horizontal" action="actionEdit.php" method="POST">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Tên sữa:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="nhập tên sữa.." name="nameS" value="<?php echo $row['nameS'] ?>">
            </div>
            </div>
            <div class="form-group">
              <div class="col-md-10" style="padding-left:101px;">
              <label for="disabledSelect">hãng sữa:</label>
              <select id="disabledSelect" class="form-control" name="nameHS" value="<?php echo $row['nameHS'] ?>">
                <option value="0"> Vinamilk </option>
  							<option value="1"> Dutch Lady </option>
  							<option value="2"> Nutifood </option>
  							<option value="3"> Nestle </option>
  							<option value="4"> IDP </option>
  							<option value="5"> Mộc châu </option>
  							<option value="6"> TH true milk </option>
  							<option value="7"> Abbott </option>
              </select>
            </div>
            </div>
            <div class="form-group">
              <div class="col-md-10" style="padding-left:105px;">
              <label for="disabledSelect">Loại sữa:</label>
              <select id="disabledSelect" class="form-control" name="typeS"  value="<?php echo $row['nameS'] ?>">
                <option value="0"> Sữa tươi không đường </option>
  							<option value="1"> Sữa tươi có đường </option>
  							<option value="2"> Sữa chua </option>
  							<option value="3"> Sữa bột </option>
              </select>
            </div>
            </div>
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Thể tích sữa:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="nhập thể tích sữa.." name="weight"  value="<?php echo $row['weight'] ?>">

            </div>
            </div>
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Đơn giá:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="nhập giá.." name="price"  value="<?php echo $row['price'] ?>">

            </div>
            </div>
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">TPDD:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputEmail3" placeholder="nhập thành phần dinh dưỡng.." name="nutrition"  value="<?php echo $row['nutrition'] ?>">

            </div>
          </div>
          <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Lợi ích:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="nhập lợi ích.." name="benefits"  value="<?php echo $row['benefits'] ?>">

          </div>
        </div>
        <div class="form-group" style="padding-left:68px;">
          <label for="exampleInputFile">Ảnh sản phẩm:</label>
          <input type="file" id="exampleInputFile" name="img"  value="<?php echo $row['img'] ?>">

        </div>
        <div class="">
            <input type="hidden" name="id" value="<?php echo $row["id"];?>">
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">Lưu</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>
