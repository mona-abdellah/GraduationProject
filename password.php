<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    require 'connect.php';
    /////////////////////////////////////////////////////////////////////
    //recieve data
    $pass1=mysqli_escape_string($con,$_POST['pass1']);
    $pass2=mysqli_escape_string($con,$_POST['pass2']);

    $email_to = $_SESSION['changepassemail'];
    /////////////////////////////////////////////////////////////////////
      if($pass1 == $pass2)
      {
        $sql = "update staff set password = '$pass1' where email = '$email_to'";
        $result=mysqli_query($con , $sql);

        header("Location: index.php");
        //echo 'changed';
       
      }
      else
      {
        echo "Passwords doesn't match";
      }
    /////////////////////////////////////////////////////////////////////
    //close connection
    mysqli_close($con);
}
?>


