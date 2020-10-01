<?php

session_start();
error_reporting(0);

$username = $_POST['username'];
$password = $_POST['password'];

include('includes/config.php');

$query = "SELECT * FROM admin_login where username='$username' && password='$password'";
$result = mysqli_query($conn, $query) or die("failed".mysqli_error($conn));
$row = mysqli_fetch_array($result);

if(isset($_SESSION['username']))
{
    header("location: admin.php");
    exit;
}

elseif($username == "admin" && $password == "admin@123"){
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $row['id'];
    header("location : admin.php");
}

if($username != "admin" && $password != "admin@123"){
    echo '<script>alert("Invalid Credentials...")</script>';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        body {
            background-color: rgb(44, 40, 40);
            text-decoration: none;

        }

        .admin-login {
            text-align: center;
            font-size: 40px;
            color: white;
        }

        .box {
            border: 6px solid white;
            padding: 10px;
            margin: 4px;
            margin-top: 30px;
            align-items: center;
        }

        
        .box p a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <section class="container-fluid background text-white">


        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3 box">
                <h1 class="admin-login">Admin Login</h1>
                <form class="form-container" action="index.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter username</label>
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter Password</label>
                        <input type="password" name="password" class="form-control textbox" id="exampleInputPassword1" required>
                    </div>

                    <button type="submit" name="submit" style="margin-top: 5%;" class="btn btn-dark btn-block">Submit</button>

                </form>
                <p style="margin-top: 5%; text-align: center;">
                    <a href="#">Back to Home</a>
                </p>
            </section>
            
        </section>
    </section>
</body>

</html>