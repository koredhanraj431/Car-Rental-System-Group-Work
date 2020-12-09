<?php
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="icon" href="images/favicon-16x16.png">
  <link rel="stylesheet" href="../CSS/styles.css">
  <title>PickUp Domain</title>

  <style>
    td {
      font-size: 20px;
      font-family: Montserrat;
      font-weight: bold
    }
  </style>
</head>

<body>
  <?php include('../Includes/header.php');
  ?>

<h1 style="text-align:center; color:Brown; margin-top: 20px;"> Welcome to the wide Range of Cars! </h1>
<div class="container" id="PickUp">
    <hr>
    <h1 style="text-align:center; color:green;">PickUp</h1>
    <h2 style="text-align:center;">Select from the Best </h2>
    <hr>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th class="text-center">Car Id</th>
          <th class="text-center">Car Image</th>
          <th class="text-center">Model Name</th>
          <th class="text-center">Capacity</th>
          <th class="text-center">Daily Rate</th>
          <th class="text-center">Status</th>
          <th class="text-center"></th>
        </tr>
      </thead>

      <?php
      include('../Includes/config.php');
      $sel = "SELECT * FROM Cars where car_type='PickUp'";
      $rs3 = $dbh->query($sel);
      ?>
      <tbody>
        <?php
        while ($rws = $rs3->fetch_assoc()) {
        ?>
          <tr>

            <td style="vertical-align:middle;" align="center"><?php echo $rws['car_id']; ?></td>
            <td> <img class="image" style="border-radius: 6px; height: 140px; width: 250px;" src="../Cars/<?php echo $rws['car_type']; ?>/<?php echo $rws['image']; ?>" alt="">
            </td>
            <td style="vertical-align:middle;" align="center"><?php echo $rws['car_name']; ?></td>
            <td style="vertical-align:middle" align="center"><?php echo $rws['capacity']; ?></td>
            <td style="vertical-align:middle" align="center"><?php echo $rws['hire_cost']; ?></td>
            <?php if ($rws['status'] == 'Available') {
            ?>
              <td style="vertical-align:middle" align="center" class="text-success">Available</td>
              <td style="vertical-align:middle" align="center"> <a class="btn btn-dark text-light" href="#" role="button" style="font-size: 15px; font-weight:bold">Book Car</a>
              </td>

            <?php
            } else {
            ?>
              <td style="vertical-align:middle" align="center" class="text-danger">Unavailable</td>
            <?php
            }
            ?>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>