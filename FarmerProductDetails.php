<?php
     include("functions.php");
     ?> 

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
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
   
</head>

<body>
<style>
          body{
        
    color: #666666;
    font-size: 15px;
    font-family: 'Dosis', sans-serif;
    line-height: 1.80857;

               margin-top : 150px;
          }

          .blackgoldie {
    background-color: #292b2c;
}

     </style>
<nav class="navbar navbar-expand-xl fixed-top navbar-default bootsnav" style="background-color: #292b2c;">
  <a class="float-left" href="farmerhomepage.php">
    <img src="images\logo1.jpg" class="float-left mr-2 moblogo" alt="Logo" style="border-radius:50%; height:50px;">
  </a>
  <div class="navbar-text mx-auto">
    <h1 class="text-white" style="font-size: 40px;">Products</h1>
  </div>
  <div class="flex-row right">
    <?php getFarmerUsername();?>
  </div>
</nav>
     <br>


     <?php
     include("Includes/db.php");
     $sess_user_name = $_SESSION['username'];
     // getFarmerProductDetails();
     global $con;
     if (isset($_GET['id'])) {
          $prod_id = $_GET['id'];
          $query = "select * from products where product_id=" . $prod_id;
          $run_query = mysqli_query($con, $query);
          $resultCheck = mysqli_num_rows($run_query);
          if ($resultCheck > 0) {
               while ($rows = mysqli_fetch_array($run_query)) {
                    $product_title = $rows['product_title'];
                    $product_image = $rows['product_image'];
                    $product_type = $rows['product_type'];
                    $product_stock = $rows['product_stock'];
                    $product_description = $rows['product_desc'];
                    $product_price = $rows['product_price'];
                    $product_base_price = $rows['product_price'];
                    $product_delivery = $rows['product_delivery'];
                    $product_cat = $rows['product_cat'];

                    if ($product_stock == 0) {
                         $str = "Not In Stock";
                    } else {
                         $str = "In Stock";
                    }
                    if ($product_delivery == "no") {
                         $del = "Not Applicable";
                    } else {
                         $del = "Yes,Applicable";
                    }

                    $space = "....";
                    echo "<div class='container'>
                                   <div class='row'>
                                        <div class='col-md-6' style='padding:7px; margin-top:15px;'>
                                             <img src='images/products/$product_image' class='rounded mx-auto d-block bord' height='250px' width='300px' >      
                                             <br>
                                             <div class='row'>
                                                  <div class='col-md-12'>
                                                       <h3 class='text-center' style='    font-size: 35px;  font-weight:bold;'>$product_type</h3>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class='col-md-6 blackgoldie'>
                                             <div class='row'>
                                                  <div class='col-md-12 bottom-rule aligncenter'>
                                                       <h1 style='    font-size: 35px;  color:#c8cd34;padding:10px;'>$product_title</h1>
                                                  </div>
                                             </div>
                                             <h3  style='color:white;    font-size: 25px;
                                             padding:7px;'>Rs. " . $product_price . ".00 per Kg</h3>
                                             <hr/>
                                             <div class='row'>
                                                  <div class='col-md-12 text-center'>
                                                       <h3 style='color:green;padding:7px;'>$str<h3>
                                                  </div>
                                             </div>
                                             <div class='row'>
                                                  <div class='col-md-12 text-center'>
                                                       <h3 style=' font-size: 25px;color:white;padding:7px;'><span class='monospaced'>product stock  : " . $product_stock . " Kgs" . "</span><h3>
                                                  </div>
                                             </div>
                                             <div class='row' style='padding:7px;'>
                                                  <div class='row text-center ml-4 mt-3' >
                                                       <i class='fa fa-truck fa-2x' aria-hidden='true' style='color:#c8cd34;'> </i>
                                                       <h3 style=' font-size: 25px;color:white;'>&nbsp; Product Delivery : "   . $del . "<h3>
                                                  </div>
                                             </div>

                                             <div class='row justify-content-center' style='padding:7px; margin-bottom:15px;'>
                                             <div class='col-12 d-flex justify-content-center' style='margin-bottom: 10px;'>
                                               <a href='EditProduct.php?id=$prod_id' class='btn btn-warning border-secondary' style='font-size: 25px; color:black;'><b>Edit Product</b></a>
                                               <form method='post'>
                                               <input type='hidden' name='delete_product_id' value='$prod_id'>
                                               <button type='submit' class='btn btn-warning border-secondary' style='font-size: 25px; color:black; margin-left: 10px;'><b>DELETE PRODUCT</b></button>
                                               </form>
                                               </div>
                                             <div class='col-12 d-flex justify-content-center'>
                                               <a href='Transactions.php' class='btn btn-warning border-secondary' style='font-size: 25px; color:black;'><b>My Transaction</b></a>
                                             </div>
                                           </div>
                                           
                                        </div>         
                                   </div>
                              </div>
                              <div class='container'>
                                   <div class='desc'>
                                        <div class='row'>
                                             <div class='col-md-12'>
                                             <h3><span class='monospaced'><u><b>Product Description:-</b></u></span><h3>
                                             </div>
                                        </div>
                                        <div class='row'>
                                                  <div class='col-md-12'>
                                                       <h5><span class='monospaced' style=' font-size: 25px;'>" . $space . $product_description . "</span><h5>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>";
               }
          }
     } else {
          echo "<br><br><hr><h1 align = center>Product Not Uploaded !</h1><br><br><hr>";
     }
   

// Code to handle delete product request
if (isset($_POST['delete_product_id'])) {
    $delete_product_id = $_POST['delete_product_id'];
    $query = "delete from products where product_id=$delete_product_id";
    $run_query = mysqli_query($con, $query);
    if ($run_query) {
        echo "<script>alert('Product deleted successfully!')</script>";
        echo "<script>window.open('MyProducts.php', '_self')</script>";
    } else {
        echo "<script>alert('Error')</script>";
    }

}
?>
<hr>
<br><br>
     <br><br>
   
     <?php
    include("footer.php");
    ?>
</body>

</html>