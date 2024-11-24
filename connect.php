<?php
//start connection to database
    $con=mysqli_connect('localhost' , 'root' , '' , 'hotel');
    if(! $con)
    {
        echo mysqli_connect_error();
        exit;
    }
