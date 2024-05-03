<?php
  require_once __DIR__."/autoload/autoload.php";

  if (!isset($_SESSION['level'])) {
      unset($_SESSION['user']);
      unset($_SESSION['level']);
      session_destroy();
      header("location: /MILKCO/login/");

  }else{
    if($_SESSION['level'] != "1"){
      header("location: /MILKCO/login/");

    }
  }
 ?>
<?php require_once __DIR__."/layouts/header.php"; ?>
                <!-- Page Heading -->

  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">
              Chào mừng bạn đến với trang quản trị
              <small>Subheading</small>
          </h1>
          <ol class="breadcrumb">
              <li>
                  <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
              </li>
              <li class="active">
                  <i class="fa fa-file"></i> Blank Page
              </li>
          </ol>
      </div>
  </div>
                <!-- /.row -->
<?php require_once __DIR__."/layouts/footer.php"; ?>
