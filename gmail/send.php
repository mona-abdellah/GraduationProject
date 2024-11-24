<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username   = "nourhan123essam@gmail.com";              //SMTP username
$mail->Password   = 'zqwpndamzwyxtaqw';                               //SMTP password

$mail->setFrom("nourhan123essam@gmail.com");

require '../connect.php';
$email_to=mysqli_escape_string($con,$_POST['email']);

$hash = rand(100000,999999);
$sql = 'update data set code = "'.$hash.'" where email = "'.$email_to.'"';
$result=mysqli_query($con , $sql);
$mail->Subject = 'Reset Password';
$mail->Body    = "Verification code : ".$hash;

$mail->addAddress($email_to); 

$mail->isHTML(true);

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    header("Location: ../verification_code.php");
 }