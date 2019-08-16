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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<!--main header -->
<?php
require 'includes/header.php';
?>



<div class="content">
<div class="banner-image">
<center>
<div class="inner-banner-image">
<div class="banner-content"><h1>We care life.</h1>
<p>FLAT 25% OFF ON MEDICINES FOR ORDERS ABOVE ₹1000.</p>
<a class="button1" href="products.php" style="text-decoration: none">Shop Now</a>
</div>
</div>
</center>
</div>

<!--Product images-->
<div class="container">
	<div class="row">
		<div class="col-xs-4 thumbnail">
			<img src="7.jpg" class="img-responsive" alt="Heart">
			<div class="caption">
				<h3>Heart</h3>
				<p>Here is best medicine for heart patient.</p>
			</div>
		</div>

		<div class="col-xs-4 thumbnail">
			<img src="1.jpg" class="img-responsive" alt="Diabetes">
			<div class="caption">
				<h3>Diabetes</h3>
				<p>Choose among the best medicine's availible in the world.</p>
			</div>
		</div>

		<div class="col-xs-4 thumbnail">
			<img src="8.jpg" class="img-responsive" alt="Cold & Cough">
			<div class="caption">
				<h3>Cold & Cough</h3>
				<p>Our exquisite collection for cold & cough medicine's.</p>
			</div>	
		</div>
	</div>
</div>

<?php
require  'includes/footer.php';
?>
</body>
</html>

