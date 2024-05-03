<?php
  require_once __DIR__."/../../autoload/autoload.php";

 ?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>
  <!-- Page Heading -->
  <?php
        $id = "";
        $nameS = "";
        $nameHS = "";
        $typeS = "";
        $weight = "";
        $price = "";
				$nutrition = "";
				$benefits = "";
				$img = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["id"])) { $id = $_POST['id']; }
            if(isset($_POST["nameS"])) { $nameS = $_POST['nameS']; }
            if(isset($_POST["nameHS"])) { $nameHS = $_POST['nameHS']; }
            if(isset($_POST["typeS"])) { $typeS = $_POST['typeS']; }
            if(isset($_POST["weight"])) { $weight = $_POST['weight']; }
            if(isset($_POST["price"])) { $price = $_POST['price']; }
						if(isset($_POST["nutrition"])) { $nutrition = $_POST['nutrition']; }
            if(isset($_POST["benefits"])) { $benefits = $_POST['benefits']; }
						if(isset($_POST["img"])) { $img = $_POST['img']; }
            $sl = "INSERT INTO milktype (id, nameS, nameHS, typeS, weight, price, nutrition, benefits, img)
            VALUES ('$id', '$nameS', '$nameHS', '$typeS', '$weight', '$price', '$nutrition', '$benefits', '$img')";

            if ($conn->query($sl) === TRUE) {

                $_SESSION['success'] = "Thêm mới thành công";
                echo "<script>location.href='index.php';</script>";
            } else {
                $_SESSION['error'] = "Thêm mới Thất bại";
            }
        }
      ?>
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              Thêm mới loại sữa
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
            <form class="form-horizontal" action="" method="POST">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tên sữa:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="nhập tên sữa.." name="nameS">
          </div>
          </div>
          <div class="form-group">
            <div class="col-md-10" style="padding-left:102px;">
            <label for="disabledSelect">hãng sữa:</label>
            <select id="disabledSelect" class="form-control" name="nameHS">
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
            <div class="col-md-10" style="padding-left:104px;">
            <label for="disabledSelect">Loại sữa:</label>
            <select id="disabledSelect" class="form-control" name="typeS">
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
            <input type="text" class="form-control" id="inputEmail3" placeholder="nhập thể tích sữa.." name="weight">
          </div>
          </div>
          <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Đơn giá:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="nhập giá.." name="price">
          </div>
          </div>
          <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">TPDD:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" placeholder="nhập thành phần dinh dưỡng.." name="nutrition">
          </div>
        </div>
        <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Lợi ích:</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputEmail3" placeholder="nhập lợi ích.." name="benefits">
        </div>
      </div>
      <div class="form-group" style="padding-left:68px;">
        <label for="exampleInputFile">Ảnh sản phẩm:</label>
        <input type="file" id="exampleInputFile" name="img">
      </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success">cập nhật</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>
