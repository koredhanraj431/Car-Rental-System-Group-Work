<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Admin Panel</title>
  <style>
    body {
      font-family: montserrat;
      margin: 0;
      padding: 0;
    }

    /* .logo {
      height: 50px;
      width: 50px;
      border-radius: 3em;
      margin-left: 2%;
    } */



    .elements li {
      padding: 4px;
      text-transform: uppercase;
      text-align: center;
    }

    .elements li a:hover {
      background-color: white;
      border-radius: 10px;
      transition: .5s;
    }

    .navbar-text {
      margin: auto;
      color: white;
      padding-left: 5%;
    }

    .navbar-toggler {
      float: right;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
 
      <!-- <img src="/Images/admin.jpg" alt="" class="logo"/> -->
      <span class="navbar-brand navbar-text text-info">Admin Panel | Car Rental System </span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto elements">
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Bookings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Manage Cars</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Manage Brands</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-primary" href="#">Queries</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link text-primary" href="logout.php">Logout</a>
          </li>

        </ul>

      </div>
  </nav>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>