<?php
  require_once __DIR__."/../../autoload/autoload.php";
 ?>
<?php require_once __DIR__."/../../layouts/header.php"; ?>


    <style>
        *{
        margin: 0px;
        padding: 0px;
        }
        #container{

        }
        #container table{
            margin: auto;
        }
        #container h2{
            text-align: center;
            color: blue;
            font-family:cursive;
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Hãng sữa
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> milkCO
                </li>
            </ol>
            <div class="clearfix">

            </div>
            <?php require_once __DIR__."/../../../libraries/Function.php"; ?>
        </div>
    </div>
    <div id="container">
        <table border="1">
            <tr>
                <td colspan="8"><h2>Thông Tin Hãng Sữa  </h2></td>
            </tr>
            <tr>
                <td>Mã HS</td>
                <td style="width: 200px; text-align: center;">Tên Hãng Sữa</td>
                <td style="text-align: center;">Địa chỉ</td>
                <td>Điện Thoại </td>
                <td style="text-align: center;">Email</td>
                <td colspan="2"><a href="them.php">Thêm</a></td>

            </tr>
            <?php

                $sql = "select * from milkco";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result))
                {
            ?>
            <tr>
                <td><?php echo $row["idHS"]; ?></td>
                <td><?php echo $row["nameHS"]; ?></td>
                <td><?php echo $row["addressHS"]; ?></td>
                <td><?php echo $row["phoneHS"]; ?></td>
                <td><?php echo $row["emailHS"]; ?></td>
                <td><a href="update.php?Idd=<?php  echo $row['id']?>">Sữa</a></td>
                <td><a href="xoa.php?id=<?php echo $row['id']?>" onclick="return confirm('bạn muốn xóa hãng này?');">Xóa</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>

<?php require_once __DIR__."/../../layouts/footer.php"; ?>
