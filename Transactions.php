 <?php
     include("functions.php");
     ?> 

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - Transaction</title>
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
      <nav class="navbar navbar-expand-xl fixed-top navbar-default bootsnav" style="background-color: #292b2c;">
  <a class="float-left" href="farmerhomepage.php">
    <img src="images\logo1.jpg" class="float-left mr-2 moblogo" alt="Logo" style="border-radius:50%; height:50px;">
  </a>
  <div class="navbar-text mx-auto">
    <h1 class="text-white" style="font-size: 40px;">Transaction</h1>
  </div>
  <div class="flex-row right">
    <?php getFarmerUsername();?>
  </div>
</nav>
            
<div class="row" style="margin-top: 135px;text-align:center; ">
                <div class="col-md-3 col-sm-12">
                     <a href="farmerHomepage.php" style="font-size: 25px;" id="navbar"><i class="fa fa-home" aria-hidden="true"></i><label>Home</label></a>
                </div>
                <div class="col-md-3 col-sm-12">
                     <a href="MyProducts.php" style="font-size: 25px;"id="navbar"><i class="fa fa-leaf" aria-hidden="true"></i><label>My Products</label></a>
                </div>
                <div class="col-md-3 col-sm-12">
                     <a href="Transactions.php" style="font-size: 25px;"id="navbar"><i class="fa fa-exchange" aria-hidden="true"></i><label>My Transactions</label></a>
                </div>
                <div class="col-md-3 col-sm-12">
                     <a href="CallCenter.php"style="font-size: 25px;" id="navbar"><i class="fa fa-phone fa-rotate-vertical" aria-hidden="true"></i><label>Call Centers/SMS</label></a>
                </div>
           </div>
           <hr>


          <br>

          <div style="display:block;text-align:center; ">

               <div class=content_item><label style="font-size :30px; text-shadow: 1px 1px 1px gray;margin-left:290px;"><b>TRANSACTION HISTORY
                
               </b></label>
               <div class="button-container" style="float: right;margin-right:200px;">

<button type="button"  onclick="printDiv('printableArea')" class="btn btn-warning btn-lg p-3 m-3 font-weight-bold border border-dark" style="color: black;">Print&nbsp;<i class="fas fa-print"></i></button>
</div></div>
               <br>
               
          </div>


          <div class="container">
          <div id="printableArea">

               <table class="table">
                    <thead>
                         <th>Product Name</th>
                         <th>Buyer Name</th>
                         <th>Phone Number</th>
                         <th>Delivery Address</th>
                         <th>Quantity</th>
                         <th>Amount</th>
                    </thead>


                    <tbody>
                    <?php

global $con;
if (isset($_SESSION['username'])) {
     $sess_user_name = $_SESSION['username'];
     $sel_price = "select * from orders where farmer_name = '$sess_user_name'";
     $run_price = mysqli_query($con, $sel_price);
     $i = 0;

     while ($p_price = mysqli_fetch_array($run_price)) {
          $product_id = $p_price['product_id'];
          $qty = $p_price['qty'];
          $total = $p_price['total'];
          $address = $p_price['address'];
          $phone = $p_price['buyer_phonenumber'];


          $pro_price = "select * from products where product_id='$product_id'";
          $run_pro_price = mysqli_query($con, $pro_price);
          while ($pp_price = mysqli_fetch_array($run_pro_price)) {
               $product_title = $pp_price['product_title'];


               $query_name = "select * from buyerregistration where buyer_phone = $phone";
               $run_query_name = mysqli_query($con, $query_name);
               while ($names = mysqli_fetch_array($run_query_name)) {
                    $buyer_name = $names['buyer_name'];


?>
                    <tr>
                         <td data-label="Product Name"><?php echo $product_title; ?></td>
                         <td data-label="Name"><?php echo $buyer_name; ?></td>
                         <td data-label="Phone Number"><?php echo $phone; ?></td>
                         <td data-label="Address"><?php echo $address; ?></td>
                         <td data-label="Quantity"><?php echo $qty; ?></td>
                         <td data-label="Price"><?php echo $total; ?></td>
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
</div></div> <br> <br>




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