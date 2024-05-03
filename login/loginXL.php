<?php
    session_start();
    include "../libraries/Database.php";
    $user = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from admin where email='$user' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) != 0){
            $row = mysqli_fetch_array($result);
            $_SESSION['name'] = $row[1];
            $_SESSION['user'] = $row[3];
            $_SESSION['level'] = $row[7];
            if($row[7] == "1"){
            header("Location: ../admin/index.php");
        }else if($row[7] == "0"){
            header("Location: ../index.php");
        }
    }else{
        ?>
        <script language="JavaScript">
            alert('Lỗi!!!');
            document.location='index.php';
        </script>
        <?php
    }
?>
<!-- if(mysqli_num_rows($rs) != 0){

        $row = mysqli_fetch_array($rs);
        $_SESSION['name'] = $row[1];
        $_SESSION['user'] = $row[0];
        if($row[3] === "1"){
            header('Location: ../public/admin.php');
        }else if($row[3] === "0"){
            header('Location: ../public/dauportal.php');
        }
    }else{
        header('Location: ../public/login.php');
    } -->
