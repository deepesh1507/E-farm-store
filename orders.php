<?php
include("functions.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer - Transactions</title>
    <link rel="shortcut icon" href="./images/logo11.jpg" type="image/x-icon" sizes="160x100" >
    <link rel="apple-touch-icon" href="./images/logo11.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Site CSS -->
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <br>
    <div class="container"style="margin-top:125px">
    <div style="display:block;text-align:center; margin-bottom:0px;" >

    <div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;margin-left:90px;"><b>ORDERS
                
                </b></label>
                <div class="button-container" style="float: right;margin-right:0px;">
 
 <button type="button"  onclick="printDiv('printableArea')" class="btn btn-warning btn-lg p-3 m-3 font-weight-bold border border-dark" style="color: black;">Print&nbsp;<i class="fas fa-print"></i></button>
 </div></div><br>
</div>

        <hr style="margin-top:0px">
        <div id="printableArea">
        <table class="table" style="margin-top:0px">
            <thead>
                <th>Farmer Name</th>
                <th>Farmer Phone</th>
                <th>Delivery Address</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Delivary mode</th>
                <th>Payment mode</th>
                <th>Amount Paid</th>
            </thead>

            <tbody>
                <?php

                global $con;
                if (isset($_SESSION['username'])) {
                    $sess_user_name = $_SESSION['username'];
                    $sel_price = "select * from orders where buyer_name = '$sess_user_name'";
                    $run_price = mysqli_query($con, $sel_price);
                    $i = 0;

                    while ($p_price = mysqli_fetch_array($run_price)) {
                        $product_id = $p_price['product_id'];
                        $qty = $p_price['qty'];
                        $total = $p_price['total'];
                        $address = $p_price['address'];
                        $delivery = $p_price['delivery'];
                        $payment = $p_price['payment'];

                        $pro_price = "select * from products where product_id='$product_id'";
                        $run_pro_price = mysqli_query($con, $pro_price);
                        while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                            $product_title = $pp_price['product_title'];
                            $farmer_id = $pp_price['farmer_fk'];

                            $query_name = "select * from farmerregistration where farmer_id = $farmer_id";
                            $run_query_name = mysqli_query($con, $query_name);
                            while ($names = mysqli_fetch_array($run_query_name)) {
                                $farmer_name = $names['farmer_name'];
                                $farmer_phone = $names['farmer_phone'];

                ?>
                                <tr>
                                    <td data-label="Farmer name"><?php echo $farmer_name; ?> </td>
                                    <td data-label="Farmer Phone"><?php echo $farmer_phone; ?> </td>
                                    <td data-label="Address"><?php echo $address; ?> </td>
                                    <td data-label="Product"><?php echo $product_title; ?> </td>
                                    <td data-label="Quantity"><?php echo $qty; ?> </td>
                                    <td data-label="Delivary mode"><?php echo $delivery; ?> </td>
                                    <td data-label="Payment mode"><?php echo $payment; ?> </td>
                                    <td data-label="Amount Paid"><?php echo $total; ?> </td>
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
        <br><br>
        <a href='bhome.php'><button type='button'class='btn btn-warning btn-lg p-3 m-3 font-weight-bold border border-dark' style='color: black;'>Continue Shopping <i class="fas fa-shopping-bag ml-1"></i></button></a>
     
    </div>







    <br><br>


    <?php
    include("footer.php");
    ?>
</body>
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
	</script>

</html>