<?php
session_start();

include('../Includes/config.php');
if(strlen($_SESSION['username'])==0)
	{	
header('location:index.php');
}
else{
include('includes/navbar.php');
}
?>