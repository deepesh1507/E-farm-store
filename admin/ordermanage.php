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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

<!-- Site CSS -->
<link rel="stylesheet" href="../css/style.css">
<style>
    
  
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
          <a href="../admin/allproduct.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">All Products</span>
          </a>
        </li>
        <li>
          <a href="../admin/ordermanage.php"class="active">
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
      <h3 class="heads">E-Farming Portal Admin Panel : Orders</h3>
    

      <div class="profiledetails">
      
      
      <span>
  <button type="button" onclick="printDiv('printableArea')" class="btn btn-warning btn-lg p-3 m-3 font-weight-bold border border-dark" style="color: black; float: left;">Print&nbsp;<i class="fas fa-print"></i></button>
</span>        
      </div>
    </nav>
    <div class="home-content">
    
   
            
                       
            
            <hr style="margin-top:0px">
            <div id="printableArea">
            <table class="table" style="margin-top:0px">
            <thead>
                <th>Order ID</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Buyer Name</th>
                <th>Buyer Phonenumber</th>
                <th>Quantity</th>
                <th>Delivered Adderss</th>
                <th>Delivered by Farmer</th>
                <th>Payment mode</th>
                <th>Amount Paid</th>
                <th>Farmer Name</th>
                <th>Farmer Phonenumber</th>
            </thead>
            
            <tbody>
            <?php 
            global $con;
            $query = "select * from orders ";
            $run_query = mysqli_query($con, $query);
            while ($rows = mysqli_fetch_array($run_query)) {
            $order_id = $rows['order_id'];
            $product_id = $rows['product_id'];
            $qty = $rows['qty'];
            $address = $rows['address'];
            $delivery = $rows['delivery'];
            $farmer_name = $rows['farmer_name'];
            $farmer_phonenumber = $rows['phonenumber'];
            $total = $rows['total'];
            $payment = $rows['payment'];
            $buyer_name = $rows['buyer_name'];
            $buyer_phonenumber = $rows['buyer_phonenumber'];

            $q2 = "select * from products where product_id = '$product_id'";
            $run_q2 = mysqli_query($con, $q2);
            while ($row2 = mysqli_fetch_array($run_q2)) {
              $product_name = $row2['product_title'];
              
              ?>
                                <tr>
                                    <td data-label="Order ID"><?php echo $order_id; ?> </td>
                                    <td data-label="Product ID"><?php echo $product_id; ?> </td>
                                    <td data-label="Product Name"><?php echo $product_name; ?> </td>
                                    <td data-label="Buyer Name"><?php echo $buyer_name; ?> </td>
                                    <td data-label="Buyer Phonenumber"><?php echo $buyer_phonenumber; ?> </td>
                                    <td data-label="Quantity"><?php echo $qty; ?> </td>
                                    <td data-label="Delivered Adderss"><?php echo $address; ?> </td>
                                    <td data-label="Delivered by Farmer"><?php echo $delivery; ?> </td>
                                    <td data-label="Payment mode"><?php echo $payment; ?> </td>
                                    <td data-label="Amount Paid"><?php echo $total; ?> </td>
                                    <td data-label="Farmer Name"><?php echo $farmer_name; ?> </td>
                                    <td data-label="Farmer Phonenumber"><?php echo $farmer_phonenumber; ?> </td>

                                </tr>
            </tbody>
            
            <?php
                            }
                        }
                        
                    ?>
            </table>
            </div>
             </div>
            
            </section>
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
            