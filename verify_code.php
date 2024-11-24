<?php
    session_start();
    require 'connect.php';

    /////////////////////////////////////////////////////////////////////
    //recieve data
    $code=mysqli_escape_string($con,$_POST['code']);

    /////////////////////////////////////////////////////////////////////
      $sql = "select email from data where code = '$code'";
      $result=mysqli_query($con , $sql);
      //$row = mysqli_fetch_assoc($result);
      $num = mysqli_num_rows($result);
     
      if($num >= 1)
      {
        while($row = mysqli_fetch_assoc($result)){
          $_SESSION['changepassemail'] = $row['email'];
          header("Location: change_password.php");
        }
      }
      else 
      {
        echo "Code not correct";
      }
    /////////////////////////////////////////////////////////////////////
    //close connection
    mysqli_close($con);
?>


