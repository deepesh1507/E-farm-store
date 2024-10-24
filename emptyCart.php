<?php
include("functions.php");

global $con;
$sess_user_name = $_SESSION['username'];

$get_items = "Delete from cart where username = '$sess_user_name'";
$run_items =  mysqli_query($con, $get_items);

echo "<script>window.open('cart.php','_self')</script>"
?>