<?php 
include('includes/config.php');
include('includes/server.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Portal | Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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

        .error {
            width: 92%;
            margin: 0px auto;
            padding: 10px;
            border: 1px solid #a94442;
            color: #a94442;
            background: #f2dede;
            border-radius: 5px;
            text-align: center;
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
                <form class="form-container" action="index.php" method="post">

                    <?php
                    include('Includes/errors.php');
                    ?>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter username</label>
                        <input type="text" placeholder="username" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter Password</label>
                        <input type="password" placeholder="password" name="password" class="form-control textbox">
                    </div>

                    <button type="submit" name="submit" style="margin-top: 5%;" class="btn btn-dark btn-block">LOGIN</button>

                </form>
                <p style="margin-top: 5%; text-align: center;">
                    <a href="../User/index.php">Back to Home</a>
                </p>
            </section>

        </section>
    </section>
</body>

</html>