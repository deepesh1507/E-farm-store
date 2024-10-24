<?php

include("functions.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
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
        .details h5 {
  color: white;
  font-size: 24px;
  text-align: left;
}

.details span {
  color: white;
  font-size: 24px;
  text-align: right;
}

        </style>
    
</head>


<body>

<nav class="navbar navbar-expand-xl fixed-top navbar-default bootsnav" style="background-color: #292b2c; ">

        

<a class="float-left" href="bhome.php">
    <img src="images\logo1.jpg" class="float-left mr-2 moblogo" alt="Logo" style="border-radius:50%; height:50px;">
</a>
<div class="attr-nav" >
        <!-- Start Top Search -->
<div class="top-searchh " style="margin-top: 15px;margin-bottom: 15px;">
<div class="container">
    <div class="input-group">
        <form action="SearchResult.php" method="get" enctype="multipart/form-data">
            <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops " style="width:500px;">
        </form>
    </div>
</div>
</div>
<!-- End Top Search -->
      </div>

<div class="collapse navbar-collapse" >
<div class=" flex-row right ">
    <ul class="nav navbar-nav ml-auto" id="nave"data-in="fadeInDown" data-out="fadeOutUp">
      <li class="nav-item activee"><a class="nav-link" href="bhome.php">home</a></li>
      <li class="nav-item"><a class="nav-link" id="settt"href="about.php">about us</a></li>
      <li class="nav-item"><a class="nav-link" id="settt"href="orders.php">orders</a></li>
      <li class="nav-item"><a class="nav-link" id="settt"href="contact-us.php">contact us</a></li>
    </ul>
      <div class="p-2 cart">
        <div class="icon2">
            <a href="cart.php"> <i class="fa" style=" color:white">&#61562;<span id="icon" style="color:white,font-size:15px; "> <?php echo totalItems(); ?> </span></i></a>
        </div>
      </div>
   
</div>
</div>
        
              <?php getUsername();?>
                   

</nav>



    <?php

    if (isset($_GET['id'])) {
        global $con;
        $product_id  = $_GET['id'];
        $query = "select * from products where product_id = $product_id";
        $run_query = mysqli_query($con, $query);
        echo "<br>";
        while ($rows = mysqli_fetch_array($run_query)) {
            $farmer_fk = $rows['farmer_fk'];
            $product_title = $rows['product_title'];
            $product_image = $rows['product_image'];
            $product_price = $rows['product_price'];
            $product_stock = $rows['product_stock'];
            $product_type = $rows['product_type'];
            $product_delivery = $rows['product_delivery'];
            $product_desc = $rows['product_desc'];
            if ($product_delivery == "yes") {
                $product_delivery = "Delivery by Farmer";
            } else {
                $product_delivery = "Delivery by Farmer Not Available";
            }
            $querya = "select * from farmerregistration where farmer_id = $farmer_fk";
            $runa_query = mysqli_query($con, $querya);

            while ($rows = mysqli_fetch_array($runa_query)) {
                $name = $rows['farmer_name'];
                $phone = $rows['farmer_phone'];
                $address = $rows['farmer_address'];
                $state = $rows['farmer_state'];
                $district = $rows['farmer_district'];


                echo "<br>
                <div class='container' style='margin-top:95px;'>
                    <div class='text-center'>
                        <br>
                        <h1 id='headings' class='font-weight-bold'>$product_title</h1>
                    </div>
                    <br>


                    <div class='row'>
                        <div class='col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12   imageblock border border-dark'> <img src='images/products/$product_image' class='d-flex mx-auto btn-dark image' alt='No Image Available!!' style='margin-top:35px; width: 300px; height: 300px;'><br>
                            <b>
                                <div class='text-center'>
                                    <h2>$product_type</h2>
                                    <br>
                                </div>
                            </b></div>

                        <div class='col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12 block border border-dark'>
                            <div class='text-center mt-2 ''>
                            
                                <br><br>
                                <div class='row'>
                                    <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 price'>
                                        <h3><b>Price : </b>$product_price /kg</h3>

                                    </div>
                                    <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 stock'>
                                        <h3><b>Stock : </b>$product_stock kgs</h3>
                                    </div>
                                </div>
                                <br>
                                <form actions='' method='post'>
                                <div class='row justify-content-center'>
                                    <div class='col-12 col-md-6 col-lg-6 col-xl-6'> 
                                        <a href='bhome.php?add_cart=$product_id' class='btn btn-warning border-secondary mr-1' style='color:black; font-weight:bold; width: 100%;'>Add to cart&nbsp<img src='images/carticons.png' height='20px'></a>
                                    </div>
                                </div>
                                
                            </form>
                            
                                <hr><br>
                                <div class='row text-center ml-4 mt-3'>
                                    <i class='fa fa-truck fa-2x'></i>
                                    <h3 style='padding-left:9px;'>$product_delivery</h3>
                                </div>
                                  <div class='row text-center ml-4 mt-3'>
                                   <i class='fas fa-map-marker-alt fa-1x'></i>
                                    <h5 style='padding-left:9px;'>$district , $state </h5>
                                </div>

                            </div>
                        </div>
                        <div class='col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12 text-white' style='background-color:#292b2c;'>
                            <div class='text-center farmerdetails mt-4 ' style='color:goldenrod'><b>
                                    <b>
                                        <h2>Farmer Details
                                        </h2>
                                    </b>
                                </b>
                            </div>
                            <div class='details mt-1 text-center'>
                                <h5><b> Name </b><span style='color:ghostwhite'>: $name</span></h5>

                                <h5><b> Phone Number </b><span style='color:ghostwhite'>:$phone</span></h5>
                                <br>
                                <h4 style='color:white' class='text-center '>Get In touch with Farmer</h4>
                                <a href='BuyerPageFarmerProfile.php?id=$farmer_fk' class='btn btn-warning border-secondary  chat' style='color:black; font-weight:bold; width: 80%;'><b> View Farmer Profile <i class='fas fa-id-card-alt pl-1'></i> </b></a>

                               
                            </div>
                        </div>
                    </div>

                    <br><br>
                    <div class='  description mt-0'><b>
                            <h2 class='text-center font-weight-bold'>Description</h2>
                        </b></div>
                    <br>
                    <div class='texty' style='margin-top:0%; font-size:25px;'> $product_desc.</div>

                    
                </div>";
            }
        }
    }

    if (isset($_POST['cart'])) {

        if (isset($_POST['quantity'])) {
            $qty = $_POST['quantity'];
        } else {
            $qty = 1;
        }
        global $con;
        if (isset($_SESSION['phonenumber'])) {
            $sess_phone_number = $_SESSION['phonenumber'];

            $check_pro = "select * from cart where phonenumber = $sess_phone_number and product_id='$product_id' ";

            $run_check = mysqli_query($con, $check_pro);

            if (mysqli_num_rows($run_check) > 0) {
                echo "";
            } else {
                $subtotal = $product_price * $qty;
                $insert_pro = "insert into cart (product_id,phonenumber,qty,subtotal) values ('$product_id','$sess_phone_number','$qty','$subtotal')";
                $run_insert_pro = mysqli_query($con, $insert_pro);
                echo "<script>window.location.reload(true)</script>";
            }
        } else {
            echo "<script>window.alert('Please Login First!');</script>";
        }
    }
    ?>



    <br><br>

    
    <?php
    include("footer.php");
    ?>
</body>

</html>