<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role'] != 'client'){
    header("Location: index.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Page</title>
</head>
<body>
    <h2>Welcome </h2><?php echo $_SESSION['username'];  ?>
    <a href="logout.php">Logout</a>
</body>
</html>