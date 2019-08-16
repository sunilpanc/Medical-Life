<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$user_id = $_SESSION['id'];
$item_ids_string = $_GET['itemsid'];
//We will change the status of the items purchased by the user to 'Confirmed'
$query = "UPDATE user_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
mysqli_query($con, $query) or die($mysqli_error($con));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success | Life Style Store</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
      <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
      <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="index.css">
      
</head>

    <body>
        <?php require 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">

                      <h3 align="center">Your order is confirmed. Thank you for buy medicine's with us.</h3><hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other medicine's.</p>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php");
        ?>
    </body>
</html>