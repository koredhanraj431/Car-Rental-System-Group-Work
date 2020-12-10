<?php
session_start();
include('Includes/server.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="icon" href="images/favicon-16x16.png">
  <link rel="stylesheet" href="CSS/styles.css">

  <title>Explore cars</title>
</head>

<body>
  <!-- navbar -->
  <?php
  if (strlen($_SESSION['username']) == 0) {
    include('Includes/navbar.php');
  } else {
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
    <hr> <br>
    <div class="container-explore mb-5" style="text-align: center;">
      <div class="row">
        <div class="col-lg-3">
          <img class="image" style="border-radius: 6px; height: 140px; width: 250px;" src="images/car3.jpg" alt="">
          <h2>Economy</h2>
          <?php if (isset($_SESSION['username'])) { ?>
            <p>
              <a class="btn btn-outline-success" href="Domains/Economy.php" role="button" style="border-color: #000;">View availability>></a>
            </p>
          <?php } ?>
        </div>
        <div class="col-lg-3">
          <img class="image" style="border-radius: 6px; height: 140px; width: 250px;" src="images/car7.jpg" alt="">
          <h2>Standard</h2>
          <?php if (isset($_SESSION['username'])) { ?>
            <p>
              <a class="btn btn-outline-success" href="Domains/Standard.php" role="button" style="border-color: #000;">View availability>></a>
            </p>
          <?php } ?>
        </div>
        <div class="col-lg-3">
          <img class="image" style="border-radius: 6px; height: 140px; width: 250px;" src="images/car6.jpg" alt="">
          <h2>Standard SUV</h2>
          <?php if (isset($_SESSION['username'])) { ?>
            <p>
              <a class="btn btn-outline-success" href="Domains/StandardSUV.php" role="button" style="border-color: #000;">View availability>></a>
            </p>
          <?php } ?>
        </div>
        <div class="col-lg-3">
          <img class="image" style="border-radius: 6px; height: 140px; width: 250px;" src="images/car11.jpg" alt="">
          <h2>Premium</h2>
          <?php if (isset($_SESSION['username'])) { ?>
            <p>
              <a class="btn btn-outline-success" href="Domains/Premium.php" role="button" style="border-color: #000;">View availability>></a>
            </p>
          <?php } ?>
        </div>
        <div class="col-lg-3">
          <img class="image" style="border-radius: 6px; height: 140px; width: 200px;" src="images/car2.png" alt="">
          <h2>PickUp</h2>
          <?php if (isset($_SESSION['username'])) { ?>
            <p>
              <a class="btn btn-outline-success" href="Domains/PickUp.php" role="button" style="border-color: #000;">View availability>></a>
            </p>
          <?php } ?>
        </div>
        <div class="col-lg-3">
          <img class="image" style="border-radius: 6px; height: 140px; width: 200px;" src="images/car4.png" alt="">
          <h2>Minivan</h2>
          <?php if (isset($_SESSION['username'])) { ?>
            <p>
              <a class="btn btn-outline-success" href="Domains/Minivan.php" role="button" style="border-color: #000;">View availability>></a>
            </p>
          <?php } ?>
        </div>
        <div class="col-lg-3">
          <img class="image" style="border-radius: 6px; height: 140px; width: 200px;" src="images/car5.png" alt="">
          <h2>Traveller</h2>
          <?php if (isset($_SESSION['username'])) { ?>
            <p>
              <a class="btn btn-outline-success" href="Domains/Traveller.php" role="button" style="border-color: #000;">View availability>></a>
            </p>
          <?php } ?>
        </div>
        <div class="col-lg-3">
          <img class="image" style="border-radius: 6px; height: 140px; width: 180px;" src="images/car9.jpg" alt="">
          <h2>Stylish</h2>
          <?php if (isset($_SESSION['username'])) { ?>
            <p>
              <a class="btn btn-outline-success" href="Domains/Stylish.php" role="button" style="border-color: #000;">View availability>></a>
            </p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <?php if (!isset($_SESSION['username'])) { ?>
    <footer>
      <?php
      include('includes/footer.php');
      ?>
    </footer>
  <?php } ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>