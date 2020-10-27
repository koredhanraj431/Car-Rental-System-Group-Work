<?php
session_start();

// initializing variables
$username = "";
$errors = array();

include('includes/config.php');

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($dbh, $_POST['username']);
    $password = mysqli_real_escape_string($dbh, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $query = "SELECT * FROM admin_login WHERE username='$username' AND password='$password'";
        $results = mysqli_query($dbh, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            header('location: admin.php');
            exit();
        } else {
            array_push($errors, "Invalid Credentials...");
        }
    }
}

?>