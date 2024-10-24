<?php
include("functions.php");
$sess_user_name = $_SESSION['username'];
if (isset($_GET['id'])) {
     $product_id = $_GET['id'];
     $delete_product = "delete from cart where  product_id = '$product_id' and username = '$sess_user_name'";
     $run_delete = mysqli_query($con, $delete_product);

     echo "<script>window.open('cart.php','_self')</script>";
}
