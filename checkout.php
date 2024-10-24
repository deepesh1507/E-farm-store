<?php
include("functions.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
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
<style>
    
  
    body{
        margin: 0;
        padding: 0px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 20px;
    }

    * {
        box-sizing: border-box;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 20px;

    }

    .table td,
    .table th {
        padding: 10px 10px;
        border: 1px solid #ddd;
        text-align: center;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 18px;
    }

    .table th {
        background-color: #292b2c;
        color: #c8cd34;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f5f5f5;
    }

   
    .hey {
        width: 50%;
    }

    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        .table thead {
            display: none;
        }

        .hey {
            width: 100%;
        }

        .table,
        .table tbody,
        .table tr,
        .table td {
            display: block;
            width: 100%;
        }

        .table tr {
            margin-bottom: 15px;
        }

        .table td {
            text-align: right;
            padding-left: 50%;
            text-align: right;
            position: relative;
        }

        .table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-size: 15px;
            font-weight: bold;
            text-align: left;
        }

        
    }

      
</style>

<body>


<nav class="navbar navbar-expand-xl fixed-top navbar-default bootsnav" style="background-color: #292b2c; ">

        

<a class="float-left" href="bhome.php">
    <img src="images\logo1.jpg" class="float-left mr-2 moblogo" alt="Logo" style="border-radius:50%; height:50px;">
</a>


<div class="collapse navbar-collapse" >
<div class=" flex-row right ">
    <ul class="nav navbar-nav ml-auto" id="nave"data-in="fadeInDown" data-out="fadeOutUp">
      <li class="nav-item activee"><a class="nav-link" href="bhome.php">home</a></li>
      <li class="nav-item"><a class="nav-link" id="settt"href="about.php">about us</a></li>
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
    <form action="checkout.php" method="post" style="margin-top:100px;">
        <?php
        $username = $_SESSION['username'];
       $get_addr = "select buyer_addr from buyerregistration where buyer_username='$username'";
        $run = mysqli_query($con, $get_addr);
        while ($row = mysqli_fetch_array($run)) {
            $buyer_addr = $row['buyer_addr'];
        }
        ?>

        <div class="container mt-2">
            <div class="text">
                <br>
                <h3 style="    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight:bold;font-size: 20px;">Check Your Address
            <hr style="margin-top:-0.5%">
            <form>
                <div class=" float-none float-sm-none float-md-none float-lg-right float-xl-rightcheckout mr-0 p-2 mb-5   " style="border-radius:5%;">
                    <h4 style="    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px;"><b>Grand total = Rs. <?php echo $_SESSION['grandtotal']; ?> </b></h4>
                </div>
                <div class="input-group mt-2 hey ">
                    <div class="input-group-prepend ">
                        <span class="input-group-text" style="background-color:#292b2c;color:#c8cd34;font-size: 20px;">Delivery Address</span>
                    </div>
                    <textarea class="form-control"style="font-size: 18px;" name="address" aria-label="With textarea"><?php echo $buyer_addr ?></textarea>
                </div>
        </div>
        <div class="container mt-5">
            <div class="text">
                <h3 style="    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-weight:bold;">Check Your Items </h3>
            </div>
            <hr style="margin-top:-0.5%">
            <table class="table">
                <thead>
                    <th>Serial No</th>
                    <th>Name</th>
                    <th>Total (in Rs)</th>
                    <th>Delivery options</th>
                    <!-- <th>Status</th> -->
                </thead>



                <?php

                global $con;
                if (isset($_SESSION['username'])) {
                    $sess_user_name = $_SESSION['username'];
                    $bp = "select buyer_phone from buyerregistration where buyer_name ='$sess_user_name'";
                    $bpp = mysqli_query($con, $bp);
                    $pi = mysqli_fetch_array($bpp);
                    $bphone = $pi['buyer_phone'];

                    $sel_price = "select * from cart where username = '$sess_user_name'";
                    $run_price = mysqli_query($con, $sel_price);
                    $i = 0;

                    $allproducts = array();
                    $allqty = array();
                    $allsubtotal = array();
                    $allphones = array();
                    while ($p_price = mysqli_fetch_array($run_price)) {
                        $product_id = $p_price['product_id'];
                        $qty = $p_price['qty'];
                        $subtotal = $p_price['subtotal'];
                        array_push($allproducts, $product_id);
                        array_push($allqty, $qty);

                        $pro_price = "select * from products where product_id='$product_id'";
                        $run_pro_price = mysqli_query($con, $pro_price);
                        while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                            $product_title = $pp_price['product_title'];
                            $farmer_fk = $pp_price['farmer_fk'];

                            $get_phone = "select * from farmerregistration where farmer_id = $farmer_fk";
                            $run_get_phone = mysqli_query($con, $get_phone);
                            while ($phones = mysqli_fetch_array($run_get_phone)) {
                                $fname =$phones['farmer_name'];
                                $phone = $phones['farmer_phone'];
                                array_push($allphones, $phone); ?>


                                <tbody>
                                    <tr>
                                        <td data-label="Sr.No"><?php echo $i + 1; ?></td>
                                        <td data-label="Name"><?php echo $product_title; ?></td>
                                        <td data-label="Total (in Rs)"><?php echo $subtotal; ?></td>
                                        <?php
                                        array_push($allsubtotal, $subtotal); ?>
                                        <td data-label=">Delivery options">
                                            <select class="custom-select custom-select" name="delivery">
                                            <option value="Courier">Courier</option>

                                                <option value="Buyer">Self</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>

                <?php
                            }
                        }
                        $i++;
                    }
                } else {
                    echo "<h1 align = center>Please Login First!</h1><br><br><hr>";
                } ?>
            </table>
        </div>

        <div class="container mt-5">
            <div class="text">
                <h3 style="    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Select Your Payment Mode</h3>
            </div>
            <hr style="margin-top:-0.5%">

            <div class="payment">
                <h4>Payment Options :-
                    <input type="radio" id="upi" aria-label="Radio button for following text input" name="payment" value="UPI" required>
                    <label for="upi"><img src="images/upi.png" alt="paytm" class="paytm"></label>
                    <input type="radio" id="cod" aria-label="Radio button for following text input" name="payment" value="COD" required>
                    <label for="cod"><img src="images/cod.jpg" alt="paytm" class="cod" style="height:37px"></label>
                </h4>
            </div>

            <div class="button-container" style="float: right;">
            <a href="#"><button type="submit" name="submit" class="btn btn-warning btn-lg p-3 m-3 font-weight-bold border border-dark" style="color: black;">Place Order&nbsp;<i class="fas fa-thumbs-up"></i></button></a>
</div></div>
    </form>

    <br>
<br>
<br>
<br>

    
    <div class="button-container" style="float: right;">

  <a href="cart.php"><button type="button"class="btn btn-warning btn-lg p-3 m-3 font-weight-bold border border-dark" style="color: black;">Go Back<i class="fas fa-arrow-left"></i></button></a>
</div>

    </div>


    <br>
    <br>
    <br>
    <br>
    <?php
    include("footer.php");
    ?>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $address = $_POST['address'];
    $delivery = $_POST['delivery'];
    $payment = $_POST['payment'];
    $total = $_SESSION['grandtotal'];
    
    $count = 0;
    while ($count < $i) {
        $product_id = $allproducts[$count];
        $qty = $allqty[$count];
        $total = $allsubtotal[$count];
        $phone = $allphones[$count];
        $query1 = "insert into orders (product_id,qty,address,delivery,farmer_name,phonenumber,total,payment,buyer_name,buyer_phonenumber) values ('$product_id','$qty','$address','$delivery','$fname','$phone','$total','$payment','$sess_user_name','$bphone')";
        $run = mysqli_query($con, $query1);
        $count = $count + 1;
    }
    $clear = "delete from cart where username = '$sess_user_name'";
    $run = mysqli_query($con, $clear);
    
    if ($run) {
        echo "<script>window.open('Success.php','_self')</script>";
    }
}
?>