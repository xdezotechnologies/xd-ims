<?php
require('../connection/config.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
if(isset($_POST['submit'])) {
    $name = addslashes($_POST['name']);
    $details = addslashes($_POST['details']);
    $status = addslashes($_POST['status']);

    if($name!="") {
                $query = "UPDATE product_category SET name='$name', details='$details', status='$status' WHERE id=$id";
                $result = mysqli_query($conn,$query);
                if($result)
                {
                    echo header("Location: ../manageproductcategory.php?msg=update_success");
                }
                else 
                {
                    echo header("Location: ../addproductcategory.php?msg=update_failed");
                }
    }
    else 
    {
        echo header("Location: ../editproductcategory.php?msg=name_field_must");
    }

}

?>