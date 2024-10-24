<?php

include("functions.php");
include("Includes/db.php");
$sess_user_name = $_SESSION['username'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - Insert Product</title>
     <link rel="shortcut icon" href="./images/logo11.jpg" type="image/x-icon" sizes="160x100" >
    <link rel="apple-touch-icon" href="./images/logo11.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Site CSS -->
    <link rel="stylesheet" type="text/css" href="css/bhome.css">
    <link rel="stylesheet" href="css/style.css">
   
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="js/state.js"></script>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <style>
       body{
        margin: 0;
        padding: 0px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 20px;
    }

    * {
        box-sizing: border-box;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 20px;
    }
    .card {
        border: 2px solid black;
    }
 
</style>
</head>

      <body>
      <nav class="navbar navbar-expand-xl fixed-top navbar-default bootsnav" style="background-color: #292b2c;">
  <a class="float-left" href="farmerhomepage.php">
    <img src="images\logo1.jpg" class="float-left mr-2 moblogo" alt="Logo" style="border-radius:50%; height:50px;">
  </a>
  <div class="navbar-text mx-auto">
    <h1 class="text-white" style="font-size: 40px;">Farmer - Insert Product</h1>
  </div>
  <div class="flex-row right">
    <?php getFarmerUsername();?>
  </div>
</nav>

    <div class="container"style="margin-top: 125px;">
        <main class="my-form" style="margin-bottom: 125px;">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center font-weight-bold"style="font-size: 20px;">Insert Your New Product <i class="fas fa-leaf"></i></h4>
                            </div>
                            <div class="card-body">

                                <form name="my-form"  action="InsertProduct.php" method="post" enctype="multipart/form-data">

                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Title:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="product_title" placeholder="Enter Product title" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Stock:(In kg)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="product_stock" placeholder="Enter Product Stock" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="user_name" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Categories:</label>
                                        <div class="col-md-6">
                                            <select name="product_cat" required>
                                                <option>Select a Category</option>
                                                <?php
                                                $get_cats = "select * from categories";
                                                $run_cats =  mysqli_query($con, $get_cats);
                                                while ($row_cats = mysqli_fetch_array($run_cats)) {
                                                    $cat_id = $row_cats['cat_id'];
                                                    $cat_title = $row_cats['cat_title'];
                                                    echo "<option value='$cat_id'>$cat_title</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product type :</label>
                                        <div class="col-md-6">
                                            <input type="text" id="phone_number" class="form-control" name="product_type" placeholder="Example . potato" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="present_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Expiry :</label>
                                        <div class="col-md-6">
                                            <input id="present_address" class="form-control" type="date" name="product_expiry" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="permanent_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Image :</label>
                                        <div class="col-md-6">
                                            <input id="permanent_address" type="file" name="product_image">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product MRP : (Per kg)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nid_number" class="form-control" name="product_price" placeholder="Enter Product price" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number2" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder"> Product Description:</label>
                                        <div class="col-md-6">
                                            <textarea name="product_desc" id="nid_number2" class="form-control" name="product_desc" rows="3" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number3" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Keywords:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nid_number3" class="form-control" name="product_keywords" placeholder="Example best potatos" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number4" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Delivery :</label>
                                        <div class="col-md-6">
                                            <input type="radio" id="nid_number4" name="product_delivery" value="yes" />Yes
                                            <input type="radio" id="nid_number4" name="product_delivery" value="no" />No
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="insert_pro">
                                            INSERT
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>
    <?php
    include("footer.php");
    ?>
    <body>
   
</html>


<?php
if (isset($_POST['insert_pro'])) {    // when button is clicked

    // getting the text data from fields
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_type = $_POST['product_type'];
    $product_stock = $_POST['product_stock'];
    $product_price = $_POST['product_price'];
    $product_expiry = $_POST['product_expiry'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_delivery = $_POST['product_delivery'];
    $product_status = "PENDING";

    // getting image
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];  // for server

    if (isset($_SESSION['username'])) {
        move_uploaded_file($product_image_tmp, "images/products/$product_image");

        $phone = $_SESSION['username'];
        $getting_id = "select * from farmerregistration where farmer_name = '$sess_user_name'";
        $run = mysqli_query($con, $getting_id);
        $row = mysqli_fetch_array($run);
        $id = $row['farmer_id'];
        
if (!$run) {
    trigger_error(mysqli_error($con), E_USER_ERROR);
}

        $insert_product = "insert into products (farmer_fk,product_title, product_cat, 
                                product_type,product_expiry,product_image, product_stock, product_price,
                                product_desc,  product_keywords, product_delivery, product_status) 
                                values ('$id','$product_title','$product_cat','$product_type','$product_expiry','$product_image','$product_stock',
                                        '$product_price','$product_desc',
                                        '$product_keywords','$product_delivery','$product_status')";

        $insert_query = mysqli_query($con, $insert_product);
        echo $insert_product;
        if ($insert_query) {
            echo "<script>alert('Product has been added')</script>";
            echo "<script>window.open('farmerHomepage.php','_self')</script>";
        } else {
            echo "<script>alert('Error Uploading Data Please Check your Connections ')</script>";
        }
    }
}


?>