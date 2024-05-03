<?php
    require_once __DIR__."/../../autoload/autoload.php";
    $sqlll = "DELETE FROM milkco WHERE id =  '".$_GET["id"]."'";
    if(mysqli_query($conn, $sqlll)) {
        echo "<script>location.href='index.php';</script>";
    } else {
        echo "Error: " . $sl . "<br>" . $conn->error;
    }
?>
