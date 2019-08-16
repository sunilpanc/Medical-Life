<?php
require 'includes/common.php';
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
<!--main header -->
<?php
include 'includes/header.php';
?>
<br>
<br><br>
<div class="container">
	<div class="col-xs-6 col-xs-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h4>Login to make a purchase </h4>
			</div>

			<div class="panel-body">
                            <form method="POST" action="login_submit.php">
					<div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
					</div>
					<div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Enter Min 8 Character" pattern=".{6,}" required>
					</div>
					<div class="form-group">
                                            <button type="submit" value="registration_submit" class="btn-primary">Submit</button>
					</div>
				</form>	
			</div>
			<div class="panel-footer">
				<p>Don't have an account? <a href="signup.php">Register</a></p>
			</div>
		</div>	
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<?php
require 'includes/footer.php';

?>
</body>
</html>
