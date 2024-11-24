<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require 'connect.php';
    //validate data
    $name=mysqli_escape_string($con,$_POST['name']);
    $email=mysqli_escape_string($con,$_POST['email']);
    $password1=mysqli_escape_string($con,$_POST['fname']);

    //////////////////////////////////////////////////////////////////

    $sql = "insert into data(name ,email ,password) values ('".$name."','".$email."','".$password1."')";
    $result=mysqli_query($con,$sql);

    if(!$result)
    {
        die(mysqli_error($con));
    }
    else
    {
        header("Location: signin.php");
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //close connection
    mysqli_close($con);

}


?>