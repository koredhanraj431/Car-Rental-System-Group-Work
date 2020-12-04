<?php
 

$server = "localhost";
$user = "root";
$password = "";
$db = "carrental";

// connecting to database
$dbh = mysqli_connect($server, $user, $password, $db)
or die("Failed to connect".mysqli_error($conn));

//Check the connection
if($dbh == false){
    dir('Error: Cannot connect to the database...');
}

?>