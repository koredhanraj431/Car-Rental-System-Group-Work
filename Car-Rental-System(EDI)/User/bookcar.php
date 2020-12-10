<?php
session_start();
include('Includes/server.php');
$username = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You must log in first";
	header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Car Rental</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<script src="https://kit.fontawesome.com/3695790714.js" crossorigin="anonymous"></script>
	<link rel="icon" href="images/favicon-16x16.png">
	<link rel="stylesheet" href="CSS/styles.css">
	<style>
		.caption {
			margin-top: 100px;
		}

		.caption h2 {
			color: black;
			position: relative;
			display: block;
		}

		.caption h3 {
			color: black;
			font-family: "lato-regular", Helvetica, Arial, sans-serif;
			font-size: 14px;
			left: 1px;
		}

		.formcontainer {
			margin-left: 32%;
		}

		html,
		body {
			max-width: 100%;
			overflow-x: hidden;
		}
	</style>

</head>

<body>

	<!-- navbar -->
	<?php
	if (strlen($_SESSION['username']) == 0) {
		array_push($errors, "You must log in first");
		include('Includes/errors.php');
		header('location: index.php');
	} else {
		include('Includes/header.php');
	}
	?>
	<section class="caption">
		<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire!</h2>
		<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
	</section>

	<?php
	$sel = "SELECT * FROM users WHERE username = '$username'";
	$rs = $db->query($sel);
	$rws = $rs->fetch_assoc();
	?>

	<div class="container formcontainer" style="margin-top: 50px;">
		<div class="row">


			<div class="col-md-9">

				<form action="" class="form-horizontal" role="form" method="POST">

					<h4>Enter Personal details : </h4><br>
					<div class="form-group">
						<label class="col-lg-3 control-label">Email : </label>
						<div class="col-lg-8">
							<input class="form-control" value=" <?php echo $rws['email']; ?>" name="email" type="email" required readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Username :</label>
						<div class="col-md-8">
							<input class="form-control" type="text" name="username" value="<?php echo $rws['username']; ?>" readonly>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-3 control-label">Name : </label>
						<div class="col-lg-8">
							<input class="form-control" type="text" name="name" required>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-3 control-label">Date of Birth : </label>
						<div class="col-md-8">
							<input class="form-control" type="text" name="dob" placeholder="dd/mm/yyyy" id="birth-date" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Mobile Number : </label>
						<div class="col-md-8">
							<input class="form-control" type="number" name="mob" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Your Address : </label>
						<div class="col-md-8">
							<input class="form-control" name="address" type="text" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Country : </label>
						<div class="col-md-8">
							<input class="form-control" id="country" name="country" type="text" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Location : </label>
						<div class="col-md-8">
							<input class="form-control" id="city" name="location" type="text" required>
						</div>
					</div>
					<h4>Enter Car details : </h4><br>
					<div class="form-group">
						<label class="col-md-3 control-label">Car Id : </label>
						<div class="col-md-8">
							<input class="form-control" name="car_id" type="text" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">No of Days Car is required : </label>
						<div class="col-md-8">
							<input class="form-control" name="days" type="text" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-8">
							<input type="button" class="btn btn-primary" style="float: right;" name="p2p" value="Proceed to Pay"><br><br>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- <?php
			if (isset($_POST['p2p'])) {

				$name = $_POST['name'];
				$gender = $_POST['gender'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$location = $_POST['location'];

				$qry = "INSERT INTO client (name,id_no,gender,email,phone,location,car_id,status)
							VALUES('$name','$id_no','$gender','$email','$phone','$location','$_GET[id]','Pending')";
				$result = $db->query($qry);
				if ($result == TRUE) {
					echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered. Proceed to pay\");
											window.location = (\"pay.php\")
											</script>";
				} else {
					echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"book_car.php\")
											</script>";
				}
			}

			?> -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>