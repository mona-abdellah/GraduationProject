<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //connect to DB
    $con=mysqli_connect('localhost','root','','hotel');
    if($con)
    {
        //validate data
        $staff=$_POST['staff'];
        $shift=mysqli_escape_string($con,$_POST['shift']);
        $fname=mysqli_escape_string($con,$_POST['fname']);
        $lname=mysqli_escape_string($con,$_POST['lname']);
        $email=mysqli_escape_string($con,$_POST['email']);
        $number=mysqli_escape_string($con,$_POST['number']);
        $salary=mysqli_escape_string($con,$_POST['salary']);
        $card=mysqli_escape_string($con,$_POST['card']);
        $date=mysqli_escape_string($con,$_POST['date']);

        //////////////////////////////////////////////////////////////////
        $sql = "insert into staff(staff, shift, fname, lname,email ,number ,salary ,card,date_join) values 
        ('".$staff."','".$shift."','".$fname."','".$lname."','".$email."','".$number."','".$salary."','".$card."','".$date."')";
        $result=mysqli_query($con,$sql);

        if(!$result)
        {
            die(mysqli_error($con));
        }
        else
        {
            //echo "Employee added succefully!";
            header("location: listEmployee.php");
        }
    }
    else die(mysqli_error($con));
////////////////////////////////////////////////////////////////////////////////////////////////////////////

    //close connection
    mysqli_close($con);
}?>