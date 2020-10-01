<?php
session_start();
error_reporting(0);

include('includes/config.php');

if(!isset($_SESSION['username']))
{
    header("location: index.php");
    exit;
}

?>

<?php include('includes/navbar.php');?>