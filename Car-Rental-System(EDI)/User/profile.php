<?php
session_start();
if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: index.php');
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

  <title>My Profile</title>

</head>

<body>
  <header>
    <?php
    include('Includes/header.php');
    ?>
  </header>

  <div class="container" style="margin-top: 100px;">

    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>

          <input type="file" class="form-control">
        </div>
      </div>

      <!-- edit form column -->
      <div class="col-md-9 personal-info">

        <h3>Personal info</h3>

        <form action="" class="form-horizontal" role="form" method="POST">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Dhanraj" id="fname" required readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Kore" id="lname" required readonly>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" value="test@gmail.com" name="emailid" id="email" type="email" required readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username :</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="dhanraj1999" required readonly>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Date of Birth :</label>
            <div class="col-md-8">
              <input class="form-control" type="text" placeholder="dd/mm/yyyy" id="birth-date" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Phone Number : </label>
            <div class="col-md-8">
              <input class="form-control" type="number" id="phone-number" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Your Address : </label>
            <div class="col-md-8">
              <input class="form-control" name="address" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Country : </label>
            <div class="col-md-8">
              <input class="form-control" id="country" name="country" value="" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">City : </label>
            <div class="col-md-8">
              <input class="form-control" id="city" name="city" value="" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-danger" value="Cancel">
            </div>
          </div>
        </form>

      
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>