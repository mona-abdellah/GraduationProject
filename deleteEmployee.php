<?php 
include('connect.php');
$id = $_GET['eid'];

$sql='delete from staff where id="'.$id.'"';
$query = mysqli_query($con , $sql);
header("location: listEmployee.php");