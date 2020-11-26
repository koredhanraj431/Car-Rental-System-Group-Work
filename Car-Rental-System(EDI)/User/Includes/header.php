<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
<div class="container">

<a class="navbar-brand" href="index.php">
<img style="height: 50px; width: 70px; " src="images/logo1.png" alt=""> Drive Your Dreams</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navitems" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="user.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carvarieties.php">Explore cars</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="images/profile.png" width="30" height="30" class="rounded-circle">
                        <?php  echo $_SESSION["username"]; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Profile Settings</a>
                        <a class="dropdown-item" href="updpwd.php">Update Password </a>
                        <a class="dropdown-item" href="#">My Bookings</a>
                        <a class="dropdown-item" href="#">Post A Testimonal</a>
                        <a class="dropdown-item" href="#">My Testimonal</a>
                        <a class="dropdown-item" href="logout.php?logout-submit=logout">Logout</a>
                    </div>
                </li>
            </ul>

</nav>
