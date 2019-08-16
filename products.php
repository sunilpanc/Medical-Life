
<?php
require 'includes/common.php';
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
        <link rel="stylesheet" type="text/css" href="includes/footer.css">
</head>
<body>
<!--main header -->
<?php
require 'includes/header.php';
require 'check-if-added.php';
?>
<br><br><br>
<div class="container">
	<div class="jumbotron">
	<h1>Welcome to our Medical Life Store!</h1>
	<p>All medicines 🙳 health products are sourced from Medical life's
            trusted network of verified pharmacies and medical stores.</p>
	</div>
</div>


<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="slide1.PNG" style="width:100%;">
      </div>

      <div class="item">
        <img src="slide2.PNG" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="slide3.PNG" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<br><br>
<!--Product images-->
<div class="container">
	<div class="row">
	 <div class="col-sm-6 col-md-3 thumbnail">
	 	<img src="5.jpg" alt="Canon EOS" class="img-responsive">
	 	<div class="caption">
	 		<h3>Lvate Capsule</h3>
	 		<p>Price:Rs.350.00</p>
                        <?php if (!isset($_SESSION['email']))
                          { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
     <?php
     } else {
 //We have created a function to check whether this particular product is added to cart or not.
     if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
     echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
     } else {
     ?>
     <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
   }
   }
 ?>
	 
		</div>
	 </div>

	 <div class="col-md-3 col-sm-6 thumbnail">
	 	<img src="2.jpg" alt="Sony DSLR" class="img-responsive">
	 	<div class="caption">
	 		<h3>Nestle NAN PRO </h3>
	 		<p>Price:Rs.550.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
	 	</div>
	 </div>

	 <div class="col-md-3 col-sm-6 thumbnail">
	 	<img src="3.jpg" alt="Sony DSLR" class="img-responsive">
	 	<div class="caption">
	 		<h3>Himalaya Diabecon (DS)</h3>
	 		<p>Price:Rs.150.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
	 		
	 	</div>
	 </div>
	 <div class="col-md-3 col-sm-6 thumbnail">
	 	<img src="4.jpg" alt="Olympus DSLR" class="img-responsive">
	 	<div class="caption">
	 		<h3>Prega News </h3>
	 		<p>Price:Rs.110.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
	 		
	 	</div>
	 </div>

	 <div class="col-md-3 col-sm-6 thumbnail">
	 	<img src="9.jpg" alt="LS Dew Soap" class="img-responsive">
	 	<div class="caption">
	 		<h3>LS Dew Soap</h3>
	 		<p>Price:Rs.157.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
	 		
	 	</div>
	 </div>

	 <div class="col-md-3 col-sm-6 thumbnail">
	 	<img src="10.jpg" alt="Acnemoist Cream" class="img-responsive">
	 	<div class="caption">
	 		<h3>Acnemoist Cream</h3>
	 		<p>Price:Rs.275.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
	 		
	 	</div>
	 </div>

	 <div class="col-md-3 col-sm-6 thumbnail">
	 	<img src="11.jpg" alt="Dormedo Acne" class="img-responsive">
	 	<div class="caption">
	 		<h3>Dormedo Acne</h3>
	 		<p>Price:Rs.8000.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
	 		
	 	</div>
	 </div>

	 <div class="col-md-3 col-sm-6 thumbnail">
	 	<img src="12.jpg" alt="Aloe Vera gel" class="img-responsive">
	 	<div class="caption">
	 		<h3>Forever Aloe Vera gel</h3>
	 		<p>Price:Rs.1200.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
	 		
	 	</div>
	</div
	<div></div>
	<div class="col-md-3 col-sm-6 thumbnail">
            <img src="14.jpg" alt="Whey Protein" class="img-responsive">
		<div class="caption">
			<h3>Whey Protein</h3>
			<p>Price:Rs.2124.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
			

		</div>
	</div>

	<div class="col-md-3 col-sm-6 thumbnail">
		<img src="6.jpg" alt="Paracetamol" class="img-responsive">
		<div class="caption">
			<h3>Paracetamol</h3>
			<p>Price:Rs.100.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
			
		</div>
	</div>

	<div class="col-md-3 col-sm-6 thumbnail">
		<img src="13.jpg" alt="Diabetic protein" class="img-responsive">
		<div class="caption">
			<h3>Diabetic protein</h3>
			<p>Price:Rs.5000.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
			
		</div>
	</div>

	<div class="col-md-3 col-sm-6 thumbnail">
		<img src="15.jpg" alt="Pain Relief Oil" class="img-responsive">
		<div class="caption">
			<h3>Pain Relief Oil</h3>
			<p>Price:Rs.1295.00</p>
                         <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
 <?php
 } else {
 //We have created a function to check whether this particular product is added to cart or not.
 if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
 echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
 } else {
 ?>
<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
 <?php
 }
 }
 ?>
			
		</div>
	</div>
</div>	 
</div>

<footer>
	<div class="container">
		<center>
			Copyright © Medical Life. All Rights Reserved | Contact Us: +91 7697767333
		</center>
	</div>
</footer>
</body>
</html>

