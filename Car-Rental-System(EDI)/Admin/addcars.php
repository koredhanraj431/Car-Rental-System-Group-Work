<?php
session_start();

include('../Includes/config.php');
if (strlen($_SESSION['username']) == 0) {
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
    <style>
        form,
        .content {
            width: 50%;
            margin: 0px auto;
            padding: 20px;
            border: 3px solid #B0C4DE;
            background: white;
            border-radius: 0px 0px 10px 10px;
        }

        .input-group {
            margin: 10px 0px 10px 0px;
        }

        .input-group label {
            display: block;
            text-align: left;
            margin: 3px;
        }

        .input-group input {
            height: 30px;
            width: 93%;
            padding: 5px 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid gray;
        }

        .btn {
            padding: 10px;
            font-size: 15px;
            color: white;
            background: #5F9EA0;
            border: none;
            border-radius: 5px;
        }

        .addcar {
            margin-top: 100px;
        }

        .container {
            width: 100%;
        }

        .Image-Preview {
            width: 300px;
            min-height: 100px;
            border: 2px solid black;
            border-radius: 5px;
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            color: #cccccc;
        }

        .Image-Preview__image {
            display: none;
            width: 100%;
        }

    </style>

</head>

<body>

    <form act ion="" class="addcar" method="post" enctype="multipart/form-data">
       
        <div>
            <label>Select Car Image to upload : </label>
            <input type="file" src="#" accept="image/*" name="image" id="image" width="150px" required>
        </div>

        <div class="Image-Preview" id="Image-Preview">
            <img src="" alt="Image Preview" class="Image-Preview__image">
            <span class="Image-Preview__default-text">Image Preview</span>
        </div>
        <div class="input-group">
            <label>Car Name : </label>
            <input type="text" name="car_name" required>
        </div>
        <div class="input-group">
            <label>Car Type : </label>
            <input type="text" name="car_type" required>
        </div>
        <div class="input-group">
            <label>Capacity : </label>
            <input type="text" name="capacity" required>
        </div>
        <div class="input-group">
            <label>Hire Cost : </label>
            <input type="text" name="cost" required>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="addcar">Add Car</button>
        </div>
    </form>

    <?php
    if (isset($_POST['addcar'])) {

        $target_path = "cars/";
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