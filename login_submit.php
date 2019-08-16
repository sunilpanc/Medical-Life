<?php
require 'includes/common.php';
$con = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
$email = mysqli_real_escape_string($con,$_POST['email']);
$pass = $_POST['password'];
$password = md5($pass);
$select_query = "SELECT email,id FROM users WHERE email='$email' AND password = '$password'";
$result = mysqli_query($con,$select_query) or die(mysqli_error($con)); 
$total_rows_fetched = mysqli_num_rows($result);
if($total_rows_fetched == 0 )
{ 
    echo 'The email or password are incorrect!';
    header('location: login.php'); 
}
else
{
   $rows_fetched = mysqli_fetch_array($result); 
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $rows_fetched['id'];
    header('location: products.php');
}
?>