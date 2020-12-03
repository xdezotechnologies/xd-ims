<?php
require('../connection/config.php');
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
if(isset($_POST['submit'])) {
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $username = addslashes($_POST['username']);
    $role = addslashes($_POST['role']);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $query = "UPDATE users SET name='$name', email='$email', username='$username', role='$role' WHERE id=$id";
                $result = mysqli_query($conn,$query);
                if($result)
                {
                    echo header("Location: ../manageuser.php?msg=user_update_success");
                }
                else 
                {
                    echo header("Location: ../adduser.php?msg=user_update_failed");
                }
    }
    else 
    {
        echo header("Location: ../edituser.php?msg=email_validaton_failed");
    }

}

?>