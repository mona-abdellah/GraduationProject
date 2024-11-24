<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'mailer/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();
////////////////////////////////////////////////////////////////////////////////////////////////
//Server settings
$mail->isSMTP();                                            //Send using SMTP
$mail->SMTPDebug = 3;                      //Enable verbose debug output
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->SMTPSecure = "ssl";            //Enable implicit TLS encryption

$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
$mail->isHTML(true);  

$mail->Username   = "nourhan123essam@gmail.com";              //SMTP username
$mail->Password   = 'eqtdjislzfwytmep';                               //SMTP password



/*require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exeption\Exception;
use PHPMailer\SMTP\SMTP;

$mail = new PHPMailer();
// $SMTP = new SMTP();


$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nourhan123essam@gmail.com';                 // SMTP username
$mail->Password = 'eqtdjislzfwytmep';                           // SMTP password
                           // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;       
$mail->SMTPSecure = 'tls';                              // TCP port to connect to

$mail->setFrom("nsam90504@gmail.com");
$mail->addAddress("nourhan123essam@gmail.com");  

$mail->isHTML();                                  // Set email format to HTML


$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 */