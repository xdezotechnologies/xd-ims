<?php 
require('../connection/config.php');
if(isset($_POST['submit'])) {
    $name = addslashes($_POST['name']);
    $unit = addslashes($_POST['unit']);
    $category_id = addslashes($_POST['category_id']);
    $details = addslashes($_POST['details']);
    $status = addslashes($_POST['status']);

    if($name!="" && $unit!="" && $category_id!="") 
    {
        $query = "INSERT INTO products(name,unit,category_id,details,status) VALUES('$name','$unit','$category_id','$details','$status')";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            echo header("Location: ../manageproduct.php?msg=create_success");
        }
        else 
        {
            echo header("Location: ../manageproduct.php?msg=create_failed");
        }
    }
    else 
    {
        echo header("Location: ../addproduct.php?msg=field_required");
    }

}
?>