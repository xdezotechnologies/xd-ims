<?php
require('../connection/config.php');
if(isset($_POST['submit'])) {
    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $username = addslashes($_POST['username']);
    $password = md5(addslashes($_POST['password']));
        $password_length = strlen($password);
    $confirm_password = md5(addslashes($_POST['confirm_password']));
    $role = addslashes($_POST['role']);

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if($password_length<8)
        {
            echo header("Location: ../adduser.php?msg=password_length_failed");
        }
        else 
        {
            if($password==$confirm_password) 
            {
                $query = "INSERT INTO users(name,email,username,password,role) VALUES ('$name','$email','$username','$password','$role')";
                $result = mysqli_query($conn,$query);
                if($result)
                {
                    echo header("Location: ../manageuser.php?msg=user_create_success");
                }
                else 
                {
                    echo header("Location: ../adduser.php?msg=user_create_failed");
                }
            }
            else 
            {
                echo header("Location: ../adduser.php?msg=password_match_failed");
            }
        }
    }
    else 
    {
        echo header("Location: ../adduser.php?msg=email_validaton_failed");
    }

}

?>