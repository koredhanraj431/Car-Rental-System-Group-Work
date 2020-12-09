<?php
session_start();

include('../Includes/config.php');
if (strlen($_SESSION['uname']) == 0) {
    header('location:index.php');
} else {
    include('includes/navbar.php');
}
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
    <link rel="stylesheet" href="./includes/styles.css">

    <title>Manage cars</title>
    <style>
        p {
            font-family: Tisa;
            font-size: 18px;
            color: black;
        }
    </style>
</head>

<body>

    <!-- heading -->

    <div class="header">
        <h2> Manage your all cars here!</h2>
    </div>


    <?php
    include('../Includes/config.php');
    $sel = "SELECT * FROM Cars";
    $rs = $dbh->query($sel);
    ?>

    <div class="container-explore mb-5" style="text-align: center;">
        <div class="row">

            <?php
            while ($rws = $rs->fetch_assoc()) {
            ?>
                <div class="col-lg-3">
                    <img class="image" style="border-radius: 6px; height: 140px; width: 250px;" src="../Cars/<?php echo $rws['car_type']; ?>/<?php echo $rws['image']; ?>" alt="">
                    <p >
                        <p>Car Id : <?php echo $rws['car_id']; ?></p>
                        <p>Car Name : <?php echo $rws['car_name']; ?></p>
                        <p>Car Type : <?php echo $rws['car_type']; ?> </p>
                        <p>Hire Cost : <?php echo $rws['hire_cost']; ?></p>
                        <a class="btn btn-outline-success" href="#" role="button" style="border-color: #000;">Modify</a>
                        <a class="btn btn-outline-danger" href="#" role="button" style="border-color: #000;">Delete</a>
                    </p>
                    <br>
                    <hr><br>
                </div>
            <?php
            }
            ?>
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