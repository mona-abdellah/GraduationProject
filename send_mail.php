<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
  require 'connect.php';
    //recieve data
    $email_to=mysqli_escape_string($con,$_POST['email']);

    /////////////////////////////////////////////////////////////////////
      require 'mail.php';

      $mail->setFrom("nourhan123essam@gmail.com");

      $hash = md5( rand(100000,999999) );
      $sql = 'update data set code = "'.$hash.'" where email = "'.$email_to.'"';
      $result=mysqli_query($con , $sql);

      $mail->Subject = 'Reset Password';
      $mail->Body    = "Verification code : '.$hash.'";

      $mail->addAddress("'.$email_to.'"); 
      $mail->addAddress("nsam90504@gmail.com");  
 

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


