<?php
require('../connection/config.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $current_date_time = date('Y-m-d H:i:s');
    $query = "UPDATE product_category SET deleted_at='$current_date_time' WHERE id='$id'";
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
    if($result)
    {
        echo header("Location: ../manageproductcategory.php?softdsuccess");
    }
    else 
    {
        echo header("Location: ../manageproductcategory.php?softdfailed");
    }
}

?>