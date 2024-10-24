<?php
     include("functions.php");
     ?> 

<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - Products</title>
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
    <h1 class="text-white" style="font-size: 40px;">Edit Products</h1>
  </div>
  <div class="flex-row right">
    <?php getFarmerUsername();?>
  </div>
</nav>


    <div class="container"style="margin-top:125px;">
        <main class="my-form"style="margin-bottom:125px;">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <?php
                            if (isset($_SESSION['username'])) {
                                
                                if (isset($_GET['id'])) {
                                     $id = $_GET['id'];
                                     
                                    
                                    $getting_prod = "select * from products where product_id = $id";
                                    $run = mysqli_query($con, $getting_prod);

                                    while ($details = mysqli_fetch_array($run)) {
                                        $product_title = $details['product_title'];
                                        $product_cat = $details['product_cat'];
                                        $product_type = $details['product_type'];
                                        $product_stock = $details['product_stock'];
                                        $product_price = $details['product_price'];
                                        $product_expiry = $details['product_expiry'];
                                        $product_desc = $details['product_desc'];
                                        $product_keywords = $details['product_keywords'];
                                        $product_delivery = $details['product_delivery'];
                                    }
                                    $get_cat = "select * from categories where cat_id='$product_cat'";
                                    $run_cat =  mysqli_query($con, $get_cat);
                                    while ($det = mysqli_fetch_array($run_cat)) {
                                        $product_categ = $det['cat_title'];
                                        
                                    }

                                }
                              



                            }


                            ?>

                            <div class="card-header">
                                <h2 class="text-center font-weight-bold">Insert Your New Product <i class="fas fa-leaf"></i></h2>
                            </div>
                            <div class="card-body">

                                <form name="my-form"  method="post" enctype="multipart/form-data">

                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Title:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="product_title" value="<?php echo $product_title; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Stock:(In kg)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="product_stock" value="<?php echo $product_stock; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="user_name" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Categories:</label>
                                        <div class="col-md-6">
                                            <select name="product_cat" required>
                                                <option><?php echo $product_categ?></option>
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
                                            <input type="text" id="phone_number" class="form-control" name="product_type" value="<?php echo $product_type?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="present_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Expiry :</label>
                                        <div class="col-md-6">
                                            <input id="present_address" class="form-control" type="date" name="product_expiry"value="<?php echo $product_expiry?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="permanent_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Image :</label>
                                        <div class="col-md-6">
                                            <input id="permanent_address" type="file"  name="product_image">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product MRP : (Per kg)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nid_number" class="form-control" name="product_price" value="<?php echo $product_price?>" required>
                                        </div>
                                    </div>

                                  

                                    <div class="form-group row">
                                        <label for="nid_number2" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder"> Product Description:</label>
                                        <div class="col-md-6">
                                            <textarea name="product_desc" id="nid_number2" class="form-control" name="product_desc" rows="3" required><?php echo $product_desc?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number3" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Keywords:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nid_number3" class="form-control" name="product_keywords" value="<?php echo $product_keywords?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number4" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Delivery :</label>
                                        <div class="col-md-6">
  <input type="radio" id="delivery_yes" name="product_delivery" value="yes" <?php if ($product_delivery == 'yes') echo 'checked'; ?> />
  <label for="delivery_yes">Yes</label>
  <input type="radio" id="delivery_no" name="product_delivery" value="no" <?php if ($product_delivery == 'no') echo 'checked'; ?> />
  <label for="delivery_no">No</label>
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
    </div> <?php
    include("footer.php");
    ?>

                                            </body>

</html>
<?php

if (isset($_POST['insert_pro'])) {    // when button is clicked
    if (isset($_SESSION['username'])) {
        $id = $row['farmer_id'];
        if (isset($_GET['id'])) {
             $pid = $_GET['id'];
        }
    }
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
    $product_status = "pending";

    // getting image
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];  // for server

    if (isset($_SESSION['username'])) {
        move_uploaded_file($product_image_tmp, "images/products/$product_image");

        $sess_user_name = $_SESSION['username'];
        $getting_id = "select * from farmerregistration where farmer_name = '$sess_user_name'";
        $run = mysqli_query($con, $getting_id);
        $row = mysqli_fetch_array($run);
        $id = $row['farmer_id'];
        
if (!$run) {
    trigger_error(mysqli_error($con), E_USER_ERROR);
}

        $insert_product = "UPDATE products
        SET 
          farmer_fk = '$id',
          product_title = '$product_title',
          product_cat = '$product_cat',
          product_type = '$product_type',
          product_expiry = '$product_expiry',
          product_image = '$product_image',
          product_stock = '$product_stock',
          product_price = '$product_price',
          product_desc = '$product_desc',
          product_keywords = '$product_keywords',
          product_delivery = '$product_delivery',
          product_status = '$product_status'
        WHERE product_id = '$pid'
        ";

        $insert_query = mysqli_query($con, $insert_product);
        echo $insert_product;
        if ($insert_query) {
            echo "<script>alert('Product has been updated')</script>";
            echo "<script>window.open('farmerHomepage.php','_self')</script>";
        } else {
            echo "<script>alert('Error Uploading Data Please Check your Connections ')</script>";
        }
    }
}


?>