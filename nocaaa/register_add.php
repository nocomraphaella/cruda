<?php
//Call connection string
include('database/connection.php');

if(isset($_POST['register']))
{
    //Get all user inputs
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    //Sanitize Username
    $username = $conn->real_escape_string($_POST['username']);
    //Encrypt Password
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = "client";
    
    //Check if the username is already exists
    $check_sql = "SELECT username FROM users WHERE username= '$username'";
    //Execute SQL Command
    $result = $conn->query($check_sql);

    if($result->num_rows > 0)
    {
        header("Location: register.php?message=Username is Already Exists, Please choose another one");
    }
    else
    {
        // Proceed to Registration
        $sql_add =" INSERT INTO users (`ID`, `firstname`, `lastname`, `username`, `password`, `role`)
        VALUES (NULL, '$firstname', '$lastname', '$username', '$password', '$role')";
        //Execute insert command

        if($conn->query($sql_add) === TRUE){
            header("Location: index.php");
        }
        else{
            echo "Error: ".$conn->error;
        }

    }
    


}



?>