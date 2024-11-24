<?php
require('db.php');
if(!$con){
    echo mysqli_connect_error();
    exit;
}
header('location:index.php');
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$troom = $_POST["troom"];
$nroom =$_POST["nroom"];
$nbeds =$_POST["nbeds"];
$roomn = $_POST["roomn"];
$status = $_POST["status"];
$nadults = $_POST["nadults"];
$nchildren = $_POST["nchildren"];
$cin = $_POST["cin"];
$cout = $_POST["cout"];
$payment = $_POST["payment"];
$card_num = $_POST["card_num"];
$expire = $_POST["expired"];

    $sql="INSERT INTO `booking`(`name`, `email`, `phone`, `troom`, `nroom`, `nbeds`, `roomn`, `status`,`n_adults`, `n_children`, `cin`, `cout`, `payment`, `card_num`, `expire_date`)
    VALUES ('$name', '$email', '$phone','$troom','$nroom' , '$nbeds', '$roomn' ,'$status', '$nadults' , '$nchildren' , '$cin', '$cout', '$payment' , '$card_num' , '$expire')";
     mysqli_query($con,$sql);
      header( "refresh:5;url=index.php" );

?>