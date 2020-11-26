<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Recover mail - Drive Your Dreams</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="icon" href="images/favicon-16x16.png">
	<link rel="stylesheet" href="CSS/login_reg.css">

</head>
<?php
   include('Includes/server.php');
   if (isset($_POST['submit'])){
     $email = mysqli_real_escape_string($db, $_POST['email']);
     $emailquery = "select * from users where email='$email'";
     $query = mysqli_query($db, $emailquery);
     $emailcount = mysqli_num_rows($query);

     if ($emailcount) {
       $userdata = mysqli_fetch_array($query);
       $username = $userdata['username'];
       $token = $userdata['token'];

       $subject = "Password reset";
       $body = "Dear $username, Click here to reset your password
       http://localhost/purje/forgot.php?token=$token";
       $sender_mail = "From: vinayaklkokane2001@gmail.com";

       if (mail($email, $subject, $body, $sender_mail)) {
         // code...
         $_SESSION['msg'] = "Check your mail to reset your password";
         header('location:login.php');
       }else {
         echo "Email sending failed...";
       }
     }
     else {
       echo "This email is not registered";
     }
   }

?>
<body>
  <div class="container">
    <div class="header">
  		<h2><b>Get a link on your mail to reset your password!</b></h2>
  	</div>
  	<form method="post" action="recover_email.php">
  		<div class="input-group">
  			<label>Email</label>
  			<input type="email" name="email" value="<?php echo $email; ?>">
  		</div>
  		<div class="input-group text-center">
  			<button type="submit" class="btn" name="submit">Send Mail</button>
  		</div>
  		<p>
  			Wait, I remembered my password <a href="login.php">Click here to login then</a>
  		</p>
  	</form>
  </div>
</body>
</html>
