<?php
require 'connect.php';
if($_SERVER['REQUEST_METHOD']=='POST')
{
    //recieve data
    $email=mysqli_escape_string($con,$_POST['email']);
    $password=mysqli_escape_string($con,$_POST['password']);

    /////////////////////////////////////////////////////////////////////
    //query to database
    $query="select * from data where email='".$email."' and password='".$password."' limit 1";
    $result=mysqli_query($con , $query);

    /////////////////////////////////////////////////////////////////////
    //validation
    if($row = mysqli_fetch_assoc($result))
    {
        header("Location: index.php");
        exit;
    }
    else
    {
        echo '<script>alert("Emial or Password not correct")</script>';
      header("Location: signup.php");
    }

    /////////////////////////////////////////////////////////////////////
    //close connection
    mysqli_free_result($result);
    mysqli_close($con);
}
?>


