<?php
session_start();
include('Includes/server.php');
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/3695790714.js" crossorigin="anonymous"></script>
    <title>Payment Done</title>
    <link rel="icon" href="images/favicon-16x16.png">

  </head>
  <body>
    <?php
      if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $cno = $_POST['card'];
        $exp = $_POST['exp'];
        $cvv = $_POST['cvv'];
        $cvvCode = md5($cvv);
        $zip = $_POST['zip'];

      $sql1 = "INSERT INTO payment (name, card, expiry_date, cvv, zip) VALUES('$name', '$cno', '$exp','$cvvCode','$zip')";
      mysqli_query($db,$sql1);
    }
    ?>
    <header>
      <?php
      include('Includes/header.php');
      ?>
    </header>
    <div class="container text-center" style="margin-top: 150px;">
      <div class="alert-box">
        <div class="alert alert-success">
          <div class="alert-icon text-center">
            <i class="fa fa-check-square-o  fa-3x" aria-hidden="true"></i>
          </div>
          <div class="alert-message text-center">
            <strong>Success!</strong> <h4>Your Payment has been done.</h4>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
