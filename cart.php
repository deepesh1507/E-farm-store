<?php
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Homepage</title>
    <link rel="shortcut icon" href="./images/logo11.jpg" type="image/x-icon" sizes="160x100" >
    <link rel="apple-touch-icon" href="./images/logo11.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Site CSS -->
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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


    <div class="container">

        <?php
        if (isset($_SESSION['username'])) {
            $temp = totalItems();
            echo   "<div class='text-left'>
                        <h3>Your Items :- $temp</h3>
                        <hr>";
        }
        ?>

        <table class="table">
            <thead>
                <th>S.No</th>
                <th>Item Name</th>
                <th>Unit Price </th>
                <th style="width:25%;">Quantity</th>
                <th>Subtotal</th>
                <th>Delete</th>
            </thead>

            <?php
            $total = 0;
            global $con;
            if (isset($_SESSION['username'])) {
                $sess_user_name = $_SESSION['username'];
                $sel_price = "select * from cart where username = '$sess_user_name'";
                $run_price = mysqli_query($con, $sel_price);

                $qtycart = array();
                $i = 0;
                while ($p_price = mysqli_fetch_array($run_price)) {
                    $product_id = $p_price['product_id'];
                    $_SESSION['qtycart'][$i] = $p_price['qty'];

                    $pro_price = "select * from products where product_id='$product_id'";
                    $run_pro_price = mysqli_query($con, $pro_price);
                    while ($pp_price = mysqli_fetch_array($run_pro_price)) {
                        $product_title = $pp_price['product_title'];
                        $product_price = $pp_price['product_price'];
                        $subtotal = $_SESSION['qtycart'][$i] * $product_price;

            ?>


                        <tbody>
                            <tr>
                                <td data-label="S.No" style="font-size:20px;"><?php echo $i + 1; ?></td>
                                <td data-label="Item Name " style="font-size:20px;"><?php echo $product_title; ?></td>
                                <td data-label="Unit Price" style="font-size:20px;"><?php echo $product_price; ?></td>
                                <td data-label="Quantity p-0" style="padding-top: 1.5%; padding-bottom: -2%" class="text-center">
    <div class="d-flex justify-content-center" style="width: 90%; padding-left: 10%;">
        <div class="input-group mb-3 justify-content-center">
            <div class="input-group-append">
                <a href="MinusQty.php?id=<?php echo $product_id; ?>">
                    <button class="btn btn-outline-secondary" style="background-color:#292b2c;" type="button" id="button-addon2">
                        <b style="color:#c8cd34;"><i class="fas fa-minus"></i></b>
                    </button>
                </a>
            </div>
            <input type="number" class="form-control" oninput="this.value = Math.abs(this.value)" min="1" value='<?php echo $_SESSION['qtycart'][$i]; ?>' name="qty" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-prepend">
                <a href="AddQty.php?id=<?php echo $product_id; ?>">
                    <button class="btn btn-outline-secondary" style="background-color:#292b2c;" type="button" id="button-addon1">
                        <b style="color:#c8cd34;"><i class="fas fa-plus"></i></b>
                    </button>
                </a>
            </div>
        </div>
    </div>
</td>




                                <?php $subtotal = $_SESSION['qtycart'][$i] * $product_price; ?>
                                <?php
                                $subquery = "update cart set subtotal = $subtotal where product_id = $product_id";
                                $run = mysqli_query($con, $subquery);
                                ?>

                                <td data-label="Subtotal" style="font-size:20px;"><?php echo $subtotal; ?></td>
                                <?php $total = $total + $subtotal ?>
                                <td data-label="Delete" style="font-size:20px;"><a href="DeleteProductCart.php?id=<?php echo $product_id; ?>" id="Deletionlink"><i class="far fa-times-circle"></i></a></td>
                            </tr>
                <?php
                    }
                    $i++;
                }
            } else {
                echo "<h1 align = center>Please Login First!</h1><br><br><hr>";
            } ?>

                        </tbody>
        </table>

    </div>

    </div>


    <div class="container">
        <div class="float-none float-sm-none float-md-none float-lg-left float-xl-left  emptycart">
            
            <div class='button-container' style='float: right;'>

                <a href='emptyCart.php'><button type='button'class='btn btn-warning btn-lg p-3 m-3 font-weight-bold border border-dark' style='color: black;'> Empty Cart<i class="fas fa-shopping-cart ml-1"></i></button></a>
              </div>
                    </div>
        <!-- <div class="grandtotal  float-none float-sm-none float-md-none float-lg-right float-xl-right"></div><br> -->
        <br>
        <div class=" float-none float-sm-none float-md-none float-lg-right float-xl-rightcheckout mr-0 p-2 border border-dark  " style="border-radius:5%;">

            <h2>Grand total = Rs <?php echo $total; ?> </h2>




            <?php
            if (isset($_SESSION['username'])) {
                $sel_price = "select * from cart where username = '$sess_user_name'";
                $run_price = mysqli_query($con, $sel_price);
                $count = mysqli_num_rows($run_price);
                if ($count > 0) {
                    echo"
                                <div class='button-container' style='float: right;'>

                                <a href='Checkout.php'><button type='button'class='btn btn-warning btn-lg p-3 m-3 font-weight-bold border border-dark' style='color: black;'> Checkout<i class='fas fa-arrow-right ml-2 mt-2 mb-1'></i></button></a>
                              </div>
                            </a>";
                } else {
                    echo"
                    <div class='button-container' style='float: right;'>

                    <a href='alert.php'><button type='button'class='btn btn-warning btn-lg p-3 m-3 font-weight-bold border border-dark' style='color: black;'> Checkout<i class='fas fa-arrow-right ml-2 mt-2 mb-1'></i></button></a>
                  </div>
                </a>";
                   
                }
            } else {
                
                echo"
                <div class='button-container' style='float: right;'>

                <a href='BuyerLogin.php'><button type='button'class='btn btn-warning btn-lg p-3 m-3 font-weight-bold border border-dark' style='color: black;'> Checkout<i class='fas fa-arrow-right ml-2 mt-2 mb-1'></i></button></a>
              </div>
            </a>";
                
            }

            ?>

        </div>


















        <?php $_SESSION['grandtotal'] = $total; ?>
        <br>
        <br>
        <div class=" float-none float-sm-none float-md-none float-lg-left float-xl-left continueshopping mt-5">
        <a href='bhome.php'><button type='button'class='btn btn-warning btn-lg p-3 m-3 font-weight-bold border border-dark' style='color: black;'>Continue Shopping <i class="fas fa-shopping-bag ml-1"></i></button></a>

        </div>
       
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
 
</body>

</html>