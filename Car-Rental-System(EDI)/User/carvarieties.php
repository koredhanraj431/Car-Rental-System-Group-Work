<?php
include('Includes/server.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="images/favicon-16x16.png">
    <title>Explore cars</title>
    <style media="screen">
      .image:hover{
        transform: scale(1.2);
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <?php
  if (strlen($_SESSION['username'])==0){
    include('Includes/navbar.php');
  }
  else{
    include('Includes/header.php');
  }
  ?>
    <!-- heading -->
    <div class="container-fluid">
      <br>
      <br> <br>
      <div class="header mt-4">
        <h1 style="text-align: center; "> Pick your cars from here , Drive your dreams!</h1>
      </div>
      <hr>  <br>
      <div class="container-explore mb-5" style="text-align: center;">
        <div class="row">
          <div class="col-lg-3">
            <img class="image" style="border-radius: 6px; height: 140px; width: 250px;" src="images/car3.jpg" alt="" >
            <h2 style="">Economy</h2>
            <p>
              <a class="btn btn-outline-success" href="Allcars.php/#Economy" role="button" style="border-color: #000;">View availability>></a>
            </p>
          </div>
          <div class="col-lg-3">
            <img class="image" style="border-radius: 6px; height: 140px; width: 250px;" src="images/car7.jpg" alt="" >
            <h2 style="">Standard</h2>
            <p>
              <a class="btn btn-outline-success" href="Allcars.php/#Standard" role="button" style="border-color: #000;">View availability>></a>
            </p>
          </div>
          <div class="col-lg-3">
            <img class="image" style="border-radius: 6px; height: 140px; width: 250px;" src="images/car6.jpg" alt="" >
            <h2 style="">Standard SUV</h2>
            <p>
              <a class="btn btn-outline-success" href="Allcars.php/#Premium" role="button" style="border-color: #000;">View availability>></a>
            </p>
          </div>
          <div class="col-lg-3">
            <img class="image" style="border-radius: 6px; height: 140px; width: 250px;" src="images/car11.jpg" alt="" >
            <h2 style="">Premium</h2>
            <p>
              <a class="btn btn-outline-success" href="Allcars.php/#Traveller" role="button" style="border-color: #000;">View availability>></a>
            </p>
          </div>
          <div class="col-lg-3">
            <img class="image" style="border-radius: 6px; height: 140px; width: 200px;" src="images/car2.png" alt="" >
            <h2 style="">PickUp</h2>
            <p>
              <a class="btn btn-outline-success" href="Allcars.php/#Standard SUV" role="button" style="border-color: #000;">View availability>></a>
            </p>
          </div>
          <div class="col-lg-3">
            <img class="image" style="border-radius: 6px; height: 140px; width: 200px;" src="images/car4.png" alt="" >
            <h2 style="">Minivan</h2>
            <p>
              <a class="btn btn-outline-success" href="Allcars.php/#Pickup" role="button" style="border-color: #000;">View availability>></a>
            </p>
          </div>
          <div class="col-lg-3">
            <img class="image" style="border-radius: 6px; height: 140px; width: 200px;" src="images/car5.png" alt="" >
            <h2 style="">Traveller</h2>
            <p>
              <a class="btn btn-outline-success" href="Allcars.php/#Minivan" role="button" style="border-color: #000;">View availability>></a>
            </p>
          </div>
          <div class="col-lg-3">
            <img class="image"  style="border-radius: 6px; height: 140px; width: 180px;" src="images/car9.jpg" alt="" >
            <h2 style="">Stylish</h2>
            <p>
              <a class="btn btn-outline-success" href="Allcars.php/#Stylish" role="button" style="border-color: #000;">View availability>></a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <?php
        include('includes\footer.php');
      ?>
    </footer>
  </body>
</html>
