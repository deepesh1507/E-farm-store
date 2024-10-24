<?php
function getAllVegetables()
{

    global $con;

    $query = "select * from products where product_cat = 2  order by product_type";

    $run_query = mysqli_query($con, $query);

    while ($row_cat = mysqli_fetch_array($run_query)) {
        $product_cat = $row_cat['product_cat'];
        echo "<a  href='Categories.php?type=$product_cat'>$product_type</a>";
    }
}
?>