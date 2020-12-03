<?php
require('../connection/config.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
if(isset($_POST['submit'])) {
    $name = addslashes($_POST['name']);
    $unit = addslashes($_POST['unit']);
    $category_id = addslashes($_POST['category_id']);
    $details = addslashes($_POST['details']);
    $status = addslashes($_POST['status']);

    if($name!="") {
                $query = "UPDATE products SET name='$name', unit='$unit', category_id='$category_id', details='$details', status='$status' WHERE id=$id";
                $result = mysqli_query($conn,$query);
                if($result)
                {
                    echo header("Location: ../manageproduct.php?msg=update_success");
                }
                else 
                {
                    echo header("Location: ../addproduct.php?msg=update_failed");
                }
    }
    else 
    {
        echo header("Location: ../editproduct.php?msg=name_field_must");
    }

}

?>