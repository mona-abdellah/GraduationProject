<?php
include('db.php');
$id = $_GET['eid'];
$sql = "DELETE FROM `booking` WHERE `id` = '$id'";
$query = mysqli_query($con , $sql);
header("location:Guest.php");
?>