<?php

include("../functions.php");
include("../Includes/db.php");

if (isset($_GET['id'])) {
    // Get the product ID from the URL
    $product_id = $_GET['id'];

    // Update the product status in the database
    $query = "UPDATE products SET product_status = 'REJECTED' WHERE product_id = $product_id";
    $result = mysqli_query($con, $query);

    // Redirect to the product list page
    header('Location: productmanage.php');
    exit();
}
?>
