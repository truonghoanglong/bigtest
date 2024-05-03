<?php
    $id = $_POST['id'];
    $idHS = $_POST['idHS'];
    $nameHS = $_POST['nameHS'];
    $addressHS = $_POST['addressHS'];
    $phoneHS = $_POST['phoneHS'];
    $emailHS = $_POST['emailHS'];
    require_once __DIR__."/../../autoload/autoload.php";

    $sql = "update milkco set idHS = '$idHS',nameHS = '$nameHS', addressHS = '$addressHS',
    phoneHS = '$phoneHS', emailHS = '$emailHS'  WHERE id = '$id'";
    if( mysqli_query($conn,$sql)){
        header("location: index.php");
        exit();
    }else{
        echo "Update thất bại". mysqli_error($conn);
    }


?>
