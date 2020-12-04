<?php
session_start();

include('includes/config.php');
if(strlen($_SESSION['uname'])==0)
	{	
header('location:index.php');
}
else{
include('includes/navbar.php');
}
?>