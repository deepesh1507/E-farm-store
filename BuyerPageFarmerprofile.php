<?php
    include("includes/db.php");

include("functions.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Details</title>
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
              <li class="nav-item"><a class="nav-link" href="orders.php">orders</a></li>
              <li class="nav-item"><a class="nav-link" href="contact-us.php">contact us</a></li>
              <li class="nav-item"><a class="nav-link" href="about.php">about us</a></li>
            </ul>
      <div class="p-2 cart">
        <div class="icon2">
            <a href="cart.php"> <i class="fa" style=" color:white">&#61562;<span id="icon" style="color:white,font-size:15px; "> <?php echo totalItems(); ?> </span></i></a>
        </div>
      </div>
   
</div>
</div>
        
              <?php
               getUsername();?>
                   

</nav>

<?php
{
    if (isset($_GET['id'])) {
        global $con;
        $farmer_id  = $_GET['id'];
        $query = "select * from farmerregistration where farmer_id = $farmer_id";
        $run_query = mysqli_query($con, $query);
        $count = 0;
        while ($row = mysqli_fetch_assoc($run_query)) {
            if ($run_query) {
                $count = $count + 1;
                $name =  $row['farmer_name'];
                $phone =  $row['farmer_phone'];
                $address =$row['farmer_address'];
                $state =  $row['farmer_state'];
                $district =     $row['farmer_district'];
              echo"

      
    <div class='container'style='margin-top:155px;width: 700px; height: 500px;'>  
        <div class='card-body text-center ' style='margin-top: 0px;border:1px solid black;'>
			<form name='my-form' >
				<div class='form-group row' >
					<div class='col-md-6'>
                    <div class='row'>
                    <div class='col-md-12 text-left' style='margin-top:35px;margin-left:135px; '>
                        <span style='padding:15px;'>
                            <h4 id='full_name'><img src='images/iconsmall.png' style='width: 28px; margin-bottom:  10px;'><b> $name</b></h4>
                        </span>
                        <span style='padding:15px;'>
                            <h4 id='full_name'><img src='images/phoneicon.jpg' style='width: 32px; margin-bottom:  10px;'><b> $phone </b></h4>
                        </span>
                        <span style='padding:15px;'>
                            <h4 id='full_name'><img src='images/location.jpg' style='width: 32px; margin-bottom:  10px;'><b> $address<br>&emsp;&emsp;$district<br&emsp;>, $state</b></h4>
                        </span>
                    </div>
                </div>
                
					</div>
                    <div class='col-md-6' style=' display: flex; align-items: center; justify-content: center;'>
    
    <a href='contact-us.php' class='btn btn-warning btn-lg border-secondary chat' style='color:black; padding: 12px 24px;'><b>Report</b></a>
</div>

                </div>                        
            </form>
		</div> 
    </div>
    ";
}
}
}
}

?>
    <div class="text-center"><h3 style="padding:5px; margin-top:20px;">Farmer All Products</div>  
    <hr>   
    <div style='margin-top: 0px;margin-left: 20px;margin-right: 20px;border:1px solid black;'>        
    <?php
    if (isset($_SESSION['username'])) {
        global $con;
        if (isset($_GET['id'])) {
            $farmer_id  = $_GET['id'];
            $query = "select * from products where farmer_fk = $farmer_id";
            $run_query = mysqli_query($con, $query);
            $count = 0;
            if ($run_query) {
                echo "<div class='container-fluid'>";
                echo "<div class='row'>";
                while ($row = mysqli_fetch_assoc($run_query)) {
                    $count = $count + 1;
                    $product_title =  $row['product_title'];
                    $image =  $row['product_image'];
                    $price =  $row['product_price'];
                    $id =     $row['product_id'];
                    $path = "images/products/" . $image;

                    echo "
                    <div class='col-12 col-sm-6 col-md-4 col-lg-3'>
                    <div class='card pb-1 pl-1 pr-1 pt-0' style='height:542px'>
                        <br>
                        <img class='card-img-top' src='images/products/$image' alt='No Image Available!!' style='width: 300px; height: 300px;'>
                        <div class='card-body pb-0'>
                            <div class='row'>
                                <div class='col-12'>
                                    <h5 class='card-title font-weight-bold'>$product_title</h5>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-12'>
                                    <p class='card-text mb-2 font-weight-bold text-center'>PRICE:- $price Rs/kg</p>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-12 d-flex justify-content-center'>
                                    <a href='BuyerpageFarmerProfile.php?add_cart=$id' class='btn btn-warning border-secondary mr-1' style='color:black;font-weight:bold;'>Add to cart&nbsp<img src='images/carticons.png' height='20px'></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
                }
                echo "</div>";
                echo "</div>";
            } else {
                echo "<br><br><hr><h1 align=center>No Products !</h1><br><br><hr>";
            }
        }
    } else {
         echo "<br><br><h1 align=center>Please Login!</h1><br><br><hr>";
    }
?>
</div>


    </div>            
    <br><br>
    

    <?php
    include("footer.php");
    ?>
</body>

</html>