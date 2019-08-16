<?php
function check_if_added_to_cart($item_id)
{
    require 'includes/common.php';
    $con = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
    $user_id = $_SESSION['id'];
    $query = "SELECT * FROM user_items WHERE user_id='$user_id' AND item_id ='$item_id' and status='Added to cart'";
    $check_query = mysqli_query($con,$query) or die(mysqli_error($con));
    if(mysqli_num_rows($check_query) >= 1)
    {
        return 1;
    }
    else{
        return 0;
    }
}

?>