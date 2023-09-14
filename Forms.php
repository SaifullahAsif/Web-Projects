<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms and their validations check</title>
</head>
<body>
    
</body>
<?php

$hostname = "localhost";    
$database_name = ""; 
$username = "your_user";   
$password = "your_password";

$mysqli = new mysqli($hostname, $username, $password, $database_name);

// Check the connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Your code for interacting with the database goes here...

// Close the database connection when you're done
$mysqli->close();
?>

</html>