<?php
include('db.php');
header("Location:Guest.php");
if(!$con){
    echo mysqli_connect_error();
    exit;
}
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$password = $_POST["password"];
$troom = $_POST["troom"];
//$nroom =$_POST["nroom"];
//$nbeds =$_POST["nbeds"];
$nadults = $_POST["nadults"];
$nchildren = $_POST["nchildren"];
$meal = $_POST["meal"];
$roomn = $_POST["roomn"];
$status = $_POST["status"];
$cin = $_POST["cin"];
$cout = $_POST["cout"];
$payment = $_POST["payment"];
$card_num = $_POST["card_num"];
$expire = $_POST["expired"];


$add  = "INSERT INTO `booking`(`name`, `email`, `phone`, `troom`, `roomn`, `meal`, `n_adults`, `n_children`, `cin`, `cout`, `payment`, `card_num`, `expire_date`, `password`, `status`) VALUES
('$name' , '$email' , '$phone' , '$troom' , '$roomn' , '$meal' , '$nadults' , '$nchildren' , '$cin' , '$cout' , '$payment' , '$card_num' , '$expire' , '$password' , '$status')";

$q = mysqli_query($con,$add);

$update = "UPDATE `allroom` SET `av_state`=1 WHERE `room_num` = '$roomn' ";
$qq = mysqli_query($con,$update);

?>