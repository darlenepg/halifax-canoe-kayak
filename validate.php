<?php

/* admin login validation */

include "connection.php";

if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $error = "Username/Password Incorrect";

    if ($username != "" && $password != ""){

        $sql_query = "SELECT count(*) as cntUser FROM sfhdb WHERE username='".$username."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
            header('Location: admin-add.php');
        }else{
            $_SESSION["error"] = $error;
            header('Location: admin-login.php');
        }

    }

}


