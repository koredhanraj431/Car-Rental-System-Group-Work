<?php
 

 define('DB_HOST','localhost');
 define('DB_USER','root');
 define('DB_PASS','');
define('DB_NAME','car_rental_admin');


// connecting to database
//$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("Failed to connect".mysqli_error($conn));

try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

?>