<?php
session_start();
  require 'connect.php';
    /////////////////////////////////////////////////////////////////////
    //recieve data
    $email=mysqli_escape_string($con,$_POST['email']);
    $password=mysqli_escape_string($con,$_POST['password']);

    /////////////////////////////////////////////////////////////////////
    //query to database
    $query="select * from staff where email='$email' and password='$password' limit 1";
    $result=mysqli_query($con , $query);
    $num = mysqli_num_rows($result);
    echo $num;
    /////////////////////////////////////////////////////////////////////
    //validation
    if($num >= 1)
    {
        while( $row = mysqli_fetch_assoc($result)){
            $_SESSION["staff"] = $row['staff'];
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['fname'] . ' ' . $row['lname'];
            $_SESSION['id'] = $row['id'];
        }

        header("Location: index_dashboard.php");
        exit;
    }
    else
    {
        echo '<script>alert("Emial or Password not correct")</script>';      
    }

    /////////////////////////////////////////////////////////////////////
    //close connection
    mysqli_free_result($result);
    mysqli_close($con);
?>


