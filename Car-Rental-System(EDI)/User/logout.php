<?php
if (isset($_GET['logout-submit']) && $_GET['logout-submit'] == 'logout') {
 
    session_start();
    $_SESSION = array();
    session_destroy();
    header("location: index.php");
}
?>