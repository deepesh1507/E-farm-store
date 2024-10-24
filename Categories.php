<?php
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Buyer Homepage</title>
     <link rel="shortcut icon" href="./images/logo11.jpg" type="image/x-icon" sizes="160x100" >
    <link rel="apple-touch-icon" href="./images/logo11.jpg">
     <link rel="stylesheet" type="text/css" href="css/bhome.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/state.js"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     
     
     <script>
          var a;

          function display() {
               if (a == 0) {
                    document.getElementById("majic").style.visibility = "hidden";
                    document.getElementById("show").style.visibility = "visible";
                    return a = 1;
               } else {
                    document.getElementById("majic").style.visibility = "visible";
                    document.getElementById("show").style.visibility = "hidden";
                    // document.getElementById("show").style. visibility= "hidden";
                    return a = 0;
               }

          }
     </script>
     <style>
          .myfooter {
               background-color: #292b2c;

               color: goldenrod;
               margin-top: 15px;
          }

          .aligncenter {
               text-align: center;
          }

          a {
               color: goldenrod;
          }

          * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
          }

          nav {
               background-color: #292b2c;
          }

          .navbar-custom {
               background-color: #292b2c;
          }

          /* change the brand and text color */
          .navbar-custom .navbar-brand,
          .navbar-custom .navbar-text {
               background-color: #292b2c;
          }

          .navbar-custom .navbar-nav .nav-link {
               background-color: #292b2c;
          }

          .navbar-custom .nav-item.active .nav-link,
          .navbar-custom .nav-item:hover .nav-link {
               background-color: #292b2c;
          }

          .firstimage {
               height: 500px;
               width: 100%;
          }

          .mybtn {
               border-color: green;
               border-style: solid;
          }

          .card {
               width: 100%;
               height: 100%;
               margin: 10px;
          }

          .right {
               display: flex;
          }

          .left {
               display: none;
          }

          .cart {
               /* margin-left:10px; */
               margin-right: -9px;
          }

          .profile {
               margin-right: 2px;

          }

          .login {
               margin-right: -2px;
               margin-top: 12px;
               display: none;
          }

          .searchbox {
               width: 60%;
          }

          .lists {
               display: inline-block;
          }

          .moblists {
               display: none;
          }

          .logins {
               text-align: center;
               margin-right: -30%;
               margin-left: 35%;
          }

          /* .images {
            transition: 0.5s;
        } */

          .images:hover {

               height: 220px;
               box-shadow: 5px 5px 10px grey;
               transition: 0.3s;
          }

          .guard {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #ffc857;
               /* background-color: #ffc857; */
               line-height: 0.1em;
               margin: 10px 0 20px;
               /* font-family: serif; */
          }

          .guard span {
               background: white;
               padding: 0 10px;
          }

          .mobtext {
               display: block;
          }

          .destext {
               display: none;
          }

          .guard {
               width: 100%;
               text-align: center;
               border-bottom: 1px solid #ffc857;
               /* background-color: #ffc857; */
               line-height: 0.1em;
               margin: 10px 0 20px;
               font-family: serif;
          }

          .guard span {
               background: white;
               padding: 0 10px;
          }

          /* .settings{
    margin-left:10px;
} */
          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
               .guard {
                    width: 100%;
                    text-align: center;
                    border-bottom: 1px solid #ffc857;
                    /* background-color: #ffc857; */
                    line-height: 0.1em;
                    margin: 10px 0 20px;
                    font-family: serif;
               }

               .guard span {
                    background: white;
                    padding: 0 10px;
               }

               .mobtext {
                    display: none;
               }

               .destext {
                    display: inline-block;
                    width: 90%;
                    margin-left: 5%;
                    margin-right: 5%;
               }

               .mycarousel {
                    display: none;
               }

               .firstimage {
                    height: auto;
                    width: 90%;
               }

               .card {
                    width: 80%;
                    margin-left: 10%;
                    margin-right: 10%;

               }

               .col {
                    margin-top: 20px;
               }

               .right {
                    display: none;
                    background-color: #ff5500;
               }

               /* 
            .settings{
            margin-left:79%;
        } */
               .left {
                    display: flex;
               }

               .moblogo {
                    display: none;
               }

               .logins {
                    text-align: center;
                    margin-right: 35%;
                    padding: 15px;
               }

               .searchbox {
                    width: 95%;
                    margin-right: 5%;
                    margin-left: 0%;
               }

               .moblists {
                    display: inline-block;
                    text-align: center;
                    width: 100%;
               }

               .guard {
                    /* width: 100%; */
                    text-align: center;
                    border-bottom: 1px solid #ffc857;
                    /* background-color: #ffc857; */
                    /* line-height: 0.1em; */
                    /* margin: 10px 0 20px; */
                    /* font-family: serif; */

               }

               .guard span {
                    background: white;
                    padding: 0 10px;
               }
          }




          /* Image Grig */


          * {
               box-sizing: border-box;
          }
          body {
     color: #666666;
     font-size: 15px;
     font-family: 'Dosis', sans-serif;
     line-height: 1.80857;
}

          .header {
               text-align: center;
               padding: 32px;
          }

          .row {
               display: -ms-flexbox;
               /* IE10 */
               display: flex;
               -ms-flex-wrap: wrap;
               /* IE10 */
               flex-wrap: wrap;
               padding: 0 4px;
          }

          /* Create four equal columns that sits next to each other */
          .column {
               -ms-flex: 25%;
               /* IE10 */
               flex: 25%;
               max-width: 25%;
               padding: 0 4px;
          }

          .column img {
               margin-top: 8px;
               vertical-align: middle;
               width: 100%;
          }

          .myfooter {
               background-color: #292b2c;
               color: goldenrod;
               margin-top: 15px;
          }

          .aligncenter {
               text-align: center;
          }

          a {
               color: goldenrod;
          }






          #headings {
               /* text-shadow: 2px 1px #666666; */
               font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          }

          @media screen and (max-width: 800px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
               }
          }

          @media screen and (max-width: 600px) {
               .kolum {
                    flex: 50%;
                    max-width: 50%;
                    max-height: 40%;
               }
          }

          /* Responsive layout - makes a two column-layout instead of four columns */
          /* @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        } */

          /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
          /* @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
            }
        } */
     </style>
     <!-- <script>
        var a;

        function display() {
            if (a == 0) {
                document.getElementById("majic").style.display = "none";
                document.getElementById("show").style.display = "inline-block";
                return a = 1;
            } else {
                document.getElementById("majic").style.visibility = "visible";
                document.getElementById("show").style.visibility = "hidden";
                // document.getElementById("show").style. visibility= "hidden";
                return a = 0;
            }

        }
    </script> -->

</head>

<body>       <nav class="navbar navbar-expand-xl fixed-top navbar-default bootsnav" style="background-color: #292b2c; ">

        

<a class="float-left" href="bhome.php">
    <img src="images\logo1.jpg" class="float-left mr-2 moblogo" alt="Logo" style="border-radius:50%; height:50px;">
</a>
<div class="attr-nav" >
        <ul>
            <li class="search" ><a id="ser"href="#"><i class="fa fa-search"></i></a></li>
        </ul>
      </div>
                <!-- Start Top Search -->
<div class="top-search">
<div class="container">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-search"></i></span>
        <form action="SearchResult.php" method="get" enctype="multipart/form-data">
            <input type="text" class="form-control " id="inlineFormInputGroup" name="search" placeholder="Search for fruits,vegetables or crops " style="width:500px;">
        </form>
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
    </div>
</div>
</div>
<!-- End Top Search -->

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




     <form action="" method="post"style="margin-top:125px; ">
          <div class="container">
               <div class="row   p-2">
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                         <div class="text-center">
                              <h3 class="font-weight-bold
                              " style="color: Black ">Select Your Region</h3>
                         </div>
                    </div>
                    <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 States">

                         <select class="p-2 shadow-lg" id="states" name="stateInput" onchange="state()" tabindex="1" style="font-weight:bold;background-color:white ;color: black ;border-radius: 6px; margin-right:  200px; border-color:black ">
                              <option value="0">Select State</option>
                              <option value="ANDAMAN & NICOBAR ISLANDS">ANDAMAN & NICOBAR ISLANDS</option>
                              <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                              <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                              <option value="ASSAM">ASSAM</option>
                              <option value="BIHAR">BIHAR</option>
                              <option value="CHANDIGARH">CHANDIGARH</option>
                              <option value="CHHATTISGARH">CHHATTISGARH</option>
                              <option value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option>
                              <option value="DAMAN AND DIU">DAMAN AND DIU</option>
                              <option value="DELHI">DELHI</option>
                              <option value="GOA">GOA</option>
                              <option value="GUJARAT">GUJARAT</option>
                              <option value="HARYANA">HARYANA</option>
                              <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                              <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
                              <option value="JHARKAND">JHARKAND</option>
                              <option value="KARNATAKA">KARNATAKA</option>
                              <option value="KERALA">KERALA</option>
                              <option value="LAKSHADWEEP">LAKSHADWEEP</option>
                              <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                              <option value="MAHARASHTRA">MAHARASHTRA</option>
                              <option value="MANIPUR">MANIPUR</option>
                              <option value="MEGHALAYA">MEGHALAYA</option>
                              <option value="MIZORAM">MIZORAM</option>
                              <option value="NAGALAND">NAGALAND</option>
                              <option value="ODISHA">ODISHA</option>
                              <option value="PUDUCHERRY">PUDUCHERRY</option>
                              <option value="PUNJAB">PUNJAB</option>
                              <option value="RAJASTHAN">RAJASTHAN</option>
                              <option value="SIKKIM">SIKKIM</option>
                              <option value="TAMIL NADU">TAMIL NADU</option>
                              <option value="TELANGANA">TELANGANA</option>
                              <option value="TRIPURA">TRIPURA</option>
                              <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                              <option value="UTTARAKHAND">UTTARAKHAND</option>
                              <option value="UTTARANCHAL">UTTARANCHAL</option>
                              <option value="WEST BENGAL">WEST BENGAL</option>

                         </select>
                    </div>
                    <div class="col-6 col-xl-3 col-lg-3 col-md-6 col-sm-6 districts">
                              <select class="p-2 ml-5 shadow-lg" name="districtInput" id="district" style="font-weight:bold;background-color:white ;color: black ;border-radius: 6px; border-color: black ">
                              <option>Select District</option>
                         </select>

                    </div>
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12 go">
                    <button type="submit"  name='go' class="btn btn-warning font-weight-bold border border-dark" style="color: black;">Filter&nbsp;<i class="fas fa-filter"></i></button>    
                    </div>
               </div>

          </div>
          </div>
     </form>
     <?php
     if (isset($_POST['go'])) {
          $districtInput = $_POST['districtInput'];
          $stateInput = $_POST['stateInput'];
          echo $stateInput;
          echo "<br>";
          echo $districtInput;

          if ($stateInput != '0' && $districtInput == 'Select District') {
               echo "<script>window.open('StateSearch.php?state=$stateInput','_self')</script>";
          } else {
               echo "<script>window.open('DistrictSearch.php?district=$districtInput','_self')</script>";
          }
     }

     ?>





     <div class="container">
          <br>
          <div class="row">


          <?php
               cart();
               ?>
               <?php
               if (isset($_GET['type'])) {

                    $search_query = $_GET['type'];
                    $get_pro = "select * from products where product_type = '$search_query'";
                    $run_pro = mysqli_query($con, $get_pro);
                    // $count = mysqli_num_rows($run_pro);
                    if ($run_pro) {
                         echo "<br>";
                         while ($rows = mysqli_fetch_array($run_pro)) {
                              $product_id = $rows['product_id'];
                              $product_title = $rows['product_title'];
                              $product_image = $rows['product_image'];
                              $product_price = $rows['product_price'];
                              $product_delivery = $rows['product_delivery'];
                              $farmer_fk = $rows['farmer_fk'];
                              $farmer_name_query = "select farmer_name from farmerregistration where farmer_id = $farmer_fk";
                              $running_query_name = mysqli_query($con, $farmer_name_query);
                              while ($names = mysqli_fetch_array($running_query_name)) {
                                   $name = $names['farmer_name'];
                              }

                              if ($product_delivery == "yes") {
                                   $product_delivery = "Delivery by Farmer";
                              } else {
                                   $product_delivery = "Delivery by Farmer Not Available";
                              }
                              echo "
                    <div class='col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4'>
                <div class='card pb-1 pl-1 pr-1 pt-0' style='height:542px'>
                    <br>
                    <div class='mt-0'><b>
                            <h4><img src='images/iconsmall.png' style='width: 28px; margin-bottom:  10px;'> 
                        </b></h4>
                    </div>
                    <a href='productdetails.php?id=$product_id'>
                        <img class='card-img-top' src='images/products/$product_image' alt='Image Not Available!!' height='300px'>
                    </a>
                    <form action = '' method = 'post'>
                    <div class='card-body pb-0'>
                        <div class='row'>
                            <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                                <div class='input-group mb'>
                                    <div class='input-group-prepend'>
                                        <h5 class='card-title font-weight-bold'>$product_title</h5>
                                    </div>

                                </div>
                            </div>
                           
                        </div>
                        <p class='card-text mb-2 font-weight-bold text-center'>PRICE:- $product_price Rs/kg</p>
                        <div class='row'>
                            <div class='col-1 col-xl-3 col-lg-2 col-md-2 col-sm-2'></div>
                            <div class='col-12 col-xl-6 col-lg-6 col-md-6  col-sm-12'>
                            <a href='bhome.php?add_cart=$product_id' class='btn btn-warning border-secondary mr-1  ' style='color:black ;font-weight:bold;'>Add to cart&nbsp<img src='images/carticons.png' height='20px'></a>  
                            </div>
                        </div>
                    </div>
                       </form>
                </div>
            </div>
           ";
                        
                         }
                    } else {
                         echo "<br><br><hr><h1 align = center>Product's Not Available !</h1><br><br><hr>";
                    }
               }
               ?>
          </div>
          <br><br>


     </div>
     </div>

     <?php
    include("footer.php");
    ?>
 
</body>

</html>