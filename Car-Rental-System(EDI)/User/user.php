<?php
session_start();
if (isset($_SESSION['username']) && strlen($_SESSION['success'])>0) {
  header('location: user.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/3695790714.js" crossorigin="anonymous"></script>
  <link rel="icon" href="images/favicon-16x16.png">
  <link rel="stylesheet" href="CSS/styles.css">
  <title>Welcome to Drive your Dreams</title>

  <style>

  </style>
</head>

<body>

  <header>
    <?php
    include('Includes/header.php');
    ?>
  </header>

  <!-- Sliding images -->
  <?php
  include('Includes/carousel.php');
  ?>

  <!-- container marketing -->
  <div class="container marketing d-flex justify-content-center">
    <div class="row py-4">
      <div class="col-lg-4">
        <img class="img-circle" src="images/explore.png" alt="Explore">
        <h2>Explore</h2>
        <p></p>
        <p>
          <a class="btn btn-default" href="carvarieties.php" role="button">View details>></a>
        </p>
      </div>
      <div class="col-lg-4">
        <img class="img-circle" src="images/contact.png" alt="Contact">
        <h2>Contact</h2>
        <p></p>
        <p>
          <a class="btn btn-default" href="contact.php" role="button">View details>></a>
        </p>
      </div>
      <div class="col-lg-4">
        <img class="img-circle" src="images/about.jpg" alt="about us">
        <h2>AboutUs</h2>
        <p></p>
        <p>
          <a class="btn btn-default " href="aboutus.php" role="button">View details>></a>
        </p>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <?php
      include('includes/footer.php')
  ?>
</body>

</html>
