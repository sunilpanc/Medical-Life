<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
 header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Medical Life Store</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
    <body>
	<div class="row"> <?php
       include 'includes/header.php';
        ?><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>SIGN UP</h4> 
                    </div>
                    <div class="panel-body">
                    <form method="POST" action="signup_script.php">  
					    <div class="form-group">
                        <input type="text"  class="form-control" name="firstname" placeholder="First name"></div>
                        <div class="form-group">
                        <input type="text"  class="form-control" name="lastname" placeholder="Last name"></div>
						<div class="form-group">
                        <input type="text"  class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required></div>
						<div class="form-group">
                        <input type="password"  class="form-control" name="password" placeholder="password" pattern=".{6,}" required></div>
						<div class="form-group">
                        <input type="text"  class="form-control" name="contact" placeholder="Contact"></div>
						<div class="form-group">
                        <input type="text"  class="form-control" name="city" placeholder="City"></div>
						<div class="form-group">
                        <input type="text"  class="form-control" name="address" placeholder="Address"></div>
						<div class="form-group">
						<button class="btn btn-primary">Submit</button></div>
                    </form>
                    </div>
                   <div class="panel-footer">
                       <p>If you have an account? <a href="login.php">Login</a></p>
                   </div>
                    </div>     
                </div>        
            </div>
            <br><br><br><br>
			</div>
			<div class="row"> <?php
       include 'includes/footer.php';
        ?></body>
</html>