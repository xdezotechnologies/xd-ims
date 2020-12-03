<?php
require('../connection/config.php');
if(isset($_POST['submit'])) {
    $name = addslashes($_POST['name']);
    $address = addslashes($_POST['address']);
    $email = addslashes($_POST['email']);
    $phone = addslashes($_POST['phone']);
    $details = addslashes($_POST['details']);

    if($name!="") 
    {
        $query = "INSERT INTO suppliers(name,address,email,mobile,details) VALUES('$name','$address','$email','$phone',$details')";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            echo header("Location: ../managesupplier.php?msg=create_success");
        }
        else 
        {
            echo header("Location: ../managesupplier.php?msg=create_error");
        }
    }
    else
    {
        echo header("Location: ../addsupplier.php?msg=name_field_must");
    }

}
?>