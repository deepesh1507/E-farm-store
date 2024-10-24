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
   
    .highlight {
        background-color:lightgreen;
    }

      
</style>
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
          <a href="../admin/allproduct.php">
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
          <a href="../admin/usermanage.php"class="active">
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
      <h3 class="heads">E-Farming Portal Admin Panel</h3>
      <div class="profile-details">
        <i class='bx bx-user' ></i>
        <span class="admin_name">Admin</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
    <div class="home-content">
    <div class="card" style="height:100%; width:100%;">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link " style="color:gray"href="usermanage.php">Buyer Record</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" style="color:black"href="usermanage2.php">Farmer Record</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    

<div id="printableArea">
    <form method="post" action="delete2.php">
        <table class="table">
            <thead>
                <th><input type="checkbox" id="checkAll"></th>
                <th>Farmer ID</th>
                <th>Farmer Name</th>
                <th>Farmer Phonenumber</th>
                <th>Farmer Adderss</th>
                <th>State</th>
                <th>District</th>            
                <th>PinCode</th>            
            </thead>
            <tbody>
                <?php 
                global $con;
                $query = "select * from farmerregistration ";
                $run_query = mysqli_query($con, $query);
                while ($rows = mysqli_fetch_array($run_query)) {
                    $farmer_id = $rows['farmer_id'];
                    $farmer_name = $rows['farmer_name'];
                    $farmer_phone = $rows['farmer_phone'];
                    $farmer_address = $rows['farmer_address'];
                    $farmer_state = $rows['farmer_state'];
                    $farmer_district = $rows['farmer_district'];
                    $farmer_pin = $rows['farmer_pin'];
                ?>
                <tr>
                    <td><input type="checkbox" name="check[]" value="<?php echo $farmer_id; ?>"></td>
                    <td><?php echo $farmer_id; ?></td>
                    <td><?php echo $farmer_name; ?></td>
                    <td><?php echo $farmer_phone; ?></td>
                    <td><?php echo $farmer_address; ?></td>
                    <td><?php echo $farmer_state; ?></td>
                    <td><?php echo $farmer_district; ?></td>                  
                    <td><?php echo $farmer_pin; ?></td>                  
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <button type="submit" name="delete" class="btn btn-danger btn-lg p-3 m-3 font-weight-bold border border-dark" style="color: black;">Delete </button>
    </form>
</div>



    </div>
  </section>
</body>

<!-- Include jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('input[type="checkbox"]').click(function () {
            if ($(this).prop("checked") == true) {
                $(this).closest('tr').addClass('highlight');
            }
            else if ($(this).prop("checked") == false) {
                $(this).closest('tr').removeClass('highlight');
            }
        });
    });
</script>
<!-- Add a JavaScript code to check/uncheck all checkboxes at once -->
<script>
    $('#checkAll').click(function () {
        $('input[type="checkbox"]').prop('checked', this.checked);
        $('input[type="checkbox"]').trigger('click');
    });
</script>
</html>
