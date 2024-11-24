<?php
include('connect.php');
$id = $_GET['eid'];
$sql="DELETE FROM `room` WHERE id ='$id'";
$query=mysqli_query($con,$sql);
header("location:rooms.php");

?>