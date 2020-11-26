
<?php
include('Includes/server.php');

if (isset($_SESSION['username'])) {
  header('location: user.php');
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3695790714.js" crossorigin="anonymous"></script>
    <link rel="icon" href="images/favicon-16x16.png">
    <link rel="stylesheet" href="CSS/login_reg.css">
    <title>Login-Drive Your Dreams</title>
    <style media="screen">
      .btn{
        border:  2px #000;
      }
    </style>
  </head>
  <body>
    <div class="text-lg mb-3 text-center mt-5 text-success" data-test="welcome-message"><strong>Get Started with the leading Car rental Platform in India, Drive Your Dreams!</strong></div>
    <div class="header">
    	<h2>Login</h2>
    </div>

    <form method="post" action="login.php">
    	<?php include('Includes/errors.php'); ?>
    	<div class="input-group">
    		<i class="fas fa-user py-2"></i><label>Username</label>
    		<input type="text" name="username" >
    	</div>
    	<div class="input-group">
    		<i class="fas fa-lock prefix py-2"></i><label>Password</label>
    		<input type="password" name="password">
    	</div>
      <div class="input-group">
        <a href="recover_email.php">Forgot Password?</a>
      </div>
    	<div class="input-group logIn">
    		<button type="submit" class="btn" name="login_user">Login</button>
    	</div>
    	<p>
    		Not yet a member? <a href="register.php">Sign up</a>
    	</p>
    </form>
  </body>
</html>
