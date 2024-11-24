<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    //start connection to database
    $con=mysqli_connect('localhost' , 'root' , '' , 'form');
    if(! $con)
    {
        echo mysqli_connect_error();
        exit;
    }

    /////////////////////////////////////////////////////////////////////
    //recieve data
    $email_to=mysqli_escape_string($con,$_POST['email']);

    /////////////////////////////////////////////////////////////////////
      require 'mail.php';

      $mail->setFrom("nourhan123essam@gmail.com");

      $hash = md5( rand(100000,999999) );
      $sql = "update staff set code = '.$hash.' where email = '.$email_to.'";
      $result=mysqli_query($con , $sql);

      $mail->Subject = 'Reset Password';
      $mail->Body    = "Verification code : '.$hash.'";

      $mail->addAddress("'.$email_to.'");  

      if(!$mail->Send()) {
         echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
         header("Location: verification_code.php");
      }
    /////////////////////////////////////////////////////////////////////
    //close connection
    mysqli_close($con);
}
?>


