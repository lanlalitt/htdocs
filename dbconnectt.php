<?php
    $host = "localhost";
    $db_username = "root";
    $db_passwd = "";
    $db_name = "project3";

    $con =  mysqli_connect($host, $db_username, $db_passwd, $db_name) 
    or die("Error " . mysqli_error($con));
?>