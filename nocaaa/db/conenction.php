<?php
//Declare variables use for connection string 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "nocom";

// Actual code for connection string
$conn = new mysqli($host, $user, $pass, $dbname);


// If condition to check wether connected or not
if($conn->connect_error)
{
    die("Connection Failed: ".$conn->connect_error);
}

?>