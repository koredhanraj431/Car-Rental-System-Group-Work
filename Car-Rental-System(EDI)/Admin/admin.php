<?php
session_start();

include('includes/config.php');
if(strlen($_SESSION['username'])==0)
	{	
header('location:index.php');
}
else{


include('includes/navbar.php');

}