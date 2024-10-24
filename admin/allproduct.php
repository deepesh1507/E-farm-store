<?php

include("../functions.php");
include("../Includes/db.php");


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="shortcut icon" href="../images/logo11.jpg" type="image/x-icon" sizes="160x100" >
    <link rel="apple-touch-icon" href="../images/logo11.jpg">
    <link rel="stylesheet" href="../css/adminstyle.css">
     <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

         <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Site CSS -->
<link rel="stylesheet" href="../css/style.css">
   </head>
<body>
  <div class="sidebar">
      <ul class="nav-links">
        <li>
          <a href="../admin/admin.php" >
            <i class='bx bx-user' ></i>
            <span class="logo_name">Admin Panel</span>
          </a>
        </li>
        <li>
          <a href="../admin/productmanage.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product Management</span>
          </a>
        </li>
        <li>
          <a href="../admin/allproduct.php"class="active">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">All Products</span>
          </a>
        </li>
        <li>
          <a href="../admin/ordermanage.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">All Orders</span>
          </a>
        </li>
        <li>
          <a href="../admin/usermanage.php">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">User Management</span>
          </a>
        </li>
        <li>
         
        
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <h3 class="heads">E-Farming Portal Admin Panel : Approved Products</h3>
      <div class="profile-details">
        <i class='bx bx-user' ></i>
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    <div class="home-content">
    <style>
    .product-container {
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .product-card {
        margin-bottom: 20px;
    }
</style>

<div class="container product-container">
    <div class="row">
    <?php 
    global $con;
    if(isset($_POST['suspend'])) {
        $product_id = $_POST['product_id'];
        $query = "UPDATE products SET product_status='PENDING' WHERE product_id=$product_id";
        mysqli_query($con, $query);
    }
    $query = "SELECT * FROM products WHERE product_status='APPROVED' ORDER BY product_cat";
    $run_query = mysqli_query($con, $query);
    while ($rows = mysqli_fetch_array($run_query)) {
        $product_id = $rows['product_id'];
        $product_title = $rows['product_title'];
        $product_image = $rows['product_image'];
        $product_price = $rows['product_price'];
        $product_delivery = $rows['product_delivery'];
        $farmer_fk = $rows['farmer_fk'];
        $farmer_name_query = "SELECT farmer_name FROM farmerregistration WHERE farmer_id = $farmer_fk";
        $running_query_name = mysqli_query($con, $farmer_name_query);
        while ($names = mysqli_fetch_array($running_query_name)) {
            $name = $names['farmer_name'];
        }
        if ($product_delivery == "yes") {
            $product_delivery = "Delivery by Farmer";
        } else {
            $product_delivery = "Delivery by Farmer Not Available";
        }

        echo "
        <div class='col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4'>
            <div class='card product-card pb-1 pl-1 pr-1 pt-0  justify-content-center shadow-lg' style='height:542px'>
                <br>
                <div class='mt-0 text-center'>
                <b>
                    <h4><img src='../images/iconsmall.png' style='width: 28px; margin-bottom:  10px;'> $name</h4>
                </b>
            </div>
            <a href='#' class='d-flex justify-content-center'>
                <img class='card-img-top' src='../images/products/$product_image' alt='No Image Available!!' style='width: 300px; height: 300px;'>
            </a>
            

                <div class='card-body pb-0'>
                    <div class='row'>
                        <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 '>
                            <div class='input-group mb'>
                                <div class='input-group-prepend'>
                                    <h5 class='card-title font-weight-bold '>$product_title</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class='card-text mb-2 font-weight-bold  text-center'>PRICE:- $product_price Rs/kg</p>
                    <div class='row'>
                        <div class='col-1 col-xl-3 col-lg-2 col-md-2 col-sm-2'></div>
                        <div class='col-12 col-xl-6 col-lg-6 col-md-6  col-sm-12'>
                            <form method='post'>
                                <input type='hidden' name='product_id' value='$product_id'>
                                <button type='submit' name='suspend' class='btn btn-warning border-secondary mr-1' style='color:black ;font-weight:bold;'>Suspend&nbsp<<i class='fas fa-pause-circle'></i></i>
                                </button>
                            </form>
                        </div>
                            </div>
   </div>
</div>
</div>
";
}

    ?>  </div>
    </div>
    </div>
    </div>
  </section>
</body>
</html>
