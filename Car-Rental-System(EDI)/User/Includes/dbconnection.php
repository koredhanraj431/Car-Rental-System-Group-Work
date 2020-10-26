<?php

  $server = "localhost";
  $user = "root";
  $password = "";
  $db = "carrental";

  $con = mysqli_connect($server, $user, $password, $db);

  if ($con) {
    ?>
    <script>
      alert("Connection Successful");
    </script>
    <?php
  }
  else {
    ?>
    <script>
      alert("No Connection");
    </script>
    <?php
  }
?>
