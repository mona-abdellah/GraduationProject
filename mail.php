<?php

   require 'mailer/autoload.php';
   require 'connect.php';

   //recieve data
   $email_to=mysqli_escape_string($con,$_POST['email']);
   use PHPMailer\PHPMailer;
   use PHPMailer\Exception;
   require 'PHPMailer/Exception.php';
   require 'PHPMailer/PHPMailer.php';
   require 'PHPMailer/SMTP.php';


   //Load Composer's autoloader

   //Create an instance; passing `true` enables exceptions
   $mail = new PHPMailer();
   ////////////////////////////////////////////////////////////////////////////////////////////////
   //Server settings
   $mail->isSMTP();                                            //Send using SMTP
   $mail->SMTPDebug = 3;                      //Enable verbose debug output
   $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
   $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption

   $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
   $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
   $mail->isHTML(true);  

   $mail->Username   = "nourhan123essam@gmail.com";              //SMTP username
   $mail->Password   = 'eqtdjislzfwytmep';                               //SMTP password

   $mail->setFrom("nourhan123essam@gmail.com");

   $hash = md5( rand(100000,999999) );
   $sql = 'update data set code = "'.$hash.'" where email = "'.$email_to.'"';
   $result=mysqli_query($con , $sql);

   $mail->isHTML(true);
   $mail->Subject = 'Reset Password';
   $mail->Body    = "Verification code : '.$hash.'";

   $mail->addAddress("'.$email_to.'"); 
   $mail->addAddress("nsam90504@gmail.com");  


   if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
   } else {
      //header("Location: verification_code.php");
      echo "message sent";
   }
   /////////////////////////////////////////////////////////////////////
   //close connection
   mysqli_close($con);


