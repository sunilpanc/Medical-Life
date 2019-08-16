<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
   <html lang="en">
   <head>
       <title>Settings | Medical Life Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">

         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
         <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
         <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         <link rel="stylesheet" type="text/css" href="index.css">
   </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <br><br><br>

        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old_password" pattern=".{6,}" placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new_password"  pattern=".{6,}" placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="repnew_password" pattern=".{6,}" placeholder="Re-type New Password" required>
                        </div>
                        <div><b class="red">
                        <?php
                        if(isset($_GET["error"])){
                          echo $_GET['error'];
                        }
                        ?>
                      </b></div>
                      <br>
                        <button type="submit" class="btn btn-primary">Change</button>

                    </form>
                </div>
            </div>
        </div>
        <br><br>
           <div class="row align-items-center">
		<nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container"><div class="col-xs-offset-3"><p style="color:#B0AFAF;padding-top:10px;">Copyright © Medical Life Store. All Rights Reserved | Contact Us: +91 90000 00000</p></div></div>
    </nav></div>
    </body>
</html>