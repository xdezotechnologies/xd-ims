<?php
require('../connection/config.php');
if(isset($_POST['submit'])) {
    $name = addslashes($_POST['name']);
    $details = addslashes($_POST['details']);
    $status = addslashes($_POST['status']);

    if($name!="") 
    {
        $query = "INSERT INTO product_category(name,details,status) VALUES('$name','$details','$status')";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            echo header("Location: ../manageproductcategory.php?msg=create_success");
        }
    }
    else
    {
        echo header("Location: ../addproductcategory.php?msg=name_field_must");
    }

}
?>