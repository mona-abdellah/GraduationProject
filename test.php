<?php
//start connection to database
$con=mysqli_connect('localhost' , 'root' , '' , 'form');
if(! $con)
{
    echo mysqli_connect_error();
    exit;
}
//////////////////////////////////////////////////////////////////////////////
$sql = "select name from data where email = 'nsam90504@gmail.com'";
$result=mysqli_query($con , $sql);
$row = mysqli_fetch_assoc($result);
echo $row['name'];
