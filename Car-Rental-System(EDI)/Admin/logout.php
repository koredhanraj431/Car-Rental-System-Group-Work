<?php
session_start();

include('includes/config.php');

$_SESSION = array();

session_destroy();
header("location: index.php");
exit;
?>
