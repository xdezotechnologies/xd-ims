<?php
require('../connection/config.php'); 
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM product WHERE id=$id";
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
    if($result)
    {
        echo header("Location: ../manageproduct.php?data-show=trashed&msg=dsuccess");
    }
    else 
    {
        echo header("Location: ../manageproduct.php?msg=derror");
    }
}
?>