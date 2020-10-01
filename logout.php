<?php
session_start();
error_reporting(0);

include('includes/config.php');

$_SESSION = array();

session_destroy();
header("location: index.php");
exit;
?>
