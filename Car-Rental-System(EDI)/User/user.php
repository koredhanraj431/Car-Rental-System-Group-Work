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
    <title>Welcome</title>

    <style>

    </style>
</head>

<body>

<header>
    <?php
    include('header.php');
    ?>
</header>

    <!-- Sliding images -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/mainImg.jpg" class="d-block w-100" alt="First slide">
        <div class="carousel-caption">
          <h1><b>Wide variety</b></h1>
          <h3>Any car you want, we have it!</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/img2.jpg" class="d-block w-100" alt="second slide">
        <div class="carousel-caption">
          <h1><b>Plan for your Trips!</b></h1>
          <h3>Take only memories, leave only footprints</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/img3.jpg" class="d-block w-100" alt="Third slide">
        <div class="carousel-caption">
          <h1><b>Low cost car rental</b></h1>
          <h3>Pay less and Explore more!</h3>
        </div>
      </div>
      <div class="carousel-item">
            <img src="images/img4.jpg" class="d-block w-100" alt="Fourth slide">
            <div class="carousel-caption">
                <h1>Start your wonderful journey</h1><br>
                <h3> We simplified car rentals, so you can focus on what's important to you.
                </h3>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

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
    <footer class="p-2">
        <p class="p-3 bg-dark text-white text-center"> Copyright © 2020 Drive your Dreams. All rights reserved.</p>
    </footer>
</body>

</html>
