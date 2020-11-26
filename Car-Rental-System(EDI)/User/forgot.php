<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="images/favicon-16x16.png">
    <title>Forgot Pwd</title>
  </head>
  <body>

    <div style="margin-top: 10px;" class="container text-center ">
      <div class="row">
        <div class="col-sm-12">
          <h1>Change Your Password here!</h1>
        </div>
      </div>
      <div style="margin-top: 20px;" class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <p class="text-center">Forgot Password? Don't worry, Use the form below to change your password. Your password cannot be the same as your username.</p>
          <form method="post" onsubmit="return passwordCheck(this)" id="passwordForm" action="includes/changePwd.php">
            <input type="username" class="input-lg form-control" name="username" id="username" placeholder="Username" value="" autocomplete="off" required>
            <input style="margin-top: 10px;" type="password" class="input-lg form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off" required>
            <input style="margin-top: 10px;"type="password" class="input-lg form-control" name="password2" id="password2" placeholder="Repeat Password" autocomplete="off" required>
            <input style="margin-top: 20px;" type="submit" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
          </form>
        </div><!--/col-sm-6-->
      </div><!--/row-->
    </div>

    <script type="text/javascript">
      function passwordCheck(form) {
        pass1 = form.password1.value;
        pass2 = form.password2.value;

        if(pass1!=pass2){
          alert("Passwords aren't matching! Please check entered passwords...");
          return false;
        }
      }
    </script>
  </body>
</html>
