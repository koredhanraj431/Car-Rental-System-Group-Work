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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="images/favicon-16x16.png">
    <link rel="stylesheet" href="./includes/styles.css">
    <style>
        form {
            border: none;
        }
    </style>
</head>

<body>
<div class="header">
						<h2>Add New Cars here!</h2>
					</div>

    <form action="" class="form-horizontal addcar" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <div>
            <label>Select Car Image to upload : </label>
            <input type="file" src="#" accept="image/*" name="image" id="image" width="150px" required>
        </div>

        <div class="Image-Preview" id="Image-Preview">
            <img src="" alt="Image Preview" class="Image-Preview__image">
            <span class="Image-Preview__default-text">Image Preview</span>
        </div>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label">Car name:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" name="car_name" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-3 control-label">Car Type : </label>
            <div class="col-lg-8">
                <input class="form-control" type="text" name="car_type" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-lg-3 control-label">Capacity : </label>
            <div class="col-lg-8">
                <input class="form-control" name="capacity" type="text" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label">Hire Cost : (Per day)</label>
            <div class="col-md-8">
                <input class="form-control" name="cost" type="text" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                <button type="submit" class="btn" name="addcar">Add Car</button>
            </div>
    </form>
    <?php
    if (isset($_POST['addcar'])) {

        $target_path = "../Cars/{$_POST['car_type']}/";
        $target_path = $target_path . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {

            $image = basename($_FILES['image']['name']);
            $car_name = $_POST['car_name'];
            $car_type = $_POST['car_type'];
            $hire_cost = $_POST['cost'];
            $capacity = $_POST['capacity'];

            $qr = "INSERT INTO cars (image, car_name,car_type,hire_cost,capacity,status) 
													VALUES ('$image','$car_name','$car_type','$hire_cost','$capacity','Available')";
            $res = $dbh->query($qr);
            if ($res === TRUE) {
                echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"addcars.php\")
											</script>";
            }
        } else 'Failed';
    }
    ?>

    <script>
        const inpFile = document.getElementById("image");
        const previewContainer = document.getElementById("Image-Preview");
        const previewImage = previewContainer.querySelector(".Image-Preview__image");
        const previewdeftext = previewContainer.querySelector(".Image-Preview__default-text");

        inpFile.addEventListener("change", function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                previewdeftext.style.display = "none";
                previewImage.style.display = "block";

                reader.addEventListener("load", function() {
                    previewImage.setAttribute("src", this.result);
                });
                reader.readAsDataURL(file);
            } else {
                previewdeftext.style.display = "null";
                previewImage.style.display = "null";
                previewImage.setAttribute("src", "");
            }
        });
    </script>

</body>

</html>
