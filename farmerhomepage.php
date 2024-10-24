<?php
     include("functions.php");
     ?>

 <!DOCTYPE html>

 <html>

 <head>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Farmer Homepage</title>
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
  .resizing {
    width: 6in;
    height: 5in;
    object-fit: cover; /* to fill the container without stretching the image */
  }
</style>
 </head>

      <body>
      <nav class="navbar navbar-expand-xl fixed-top navbar-default bootsnav" style="background-color: #292b2c;">
  <a class="float-left" href="farmerhomepage.php">
    <img src="images\logo1.jpg" class="float-left mr-2 moblogo" alt="Logo" style="border-radius:50%; height:50px;">
  </a>
  <div class="navbar-text mx-auto">
    <h1 class="text-white" style="font-size: 40px;">Dashboard</h1>
  </div>
  <div class="flex-row right">
    <?php getFarmerUsername();?>
  </div>
</nav>



    

<br>
          
           <div class="row" style="margin-top: 95px;text-align:center; ">
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
                     <a href="callcenter.php"style="font-size: 25px;" id="navbar"><i class="fa fa-phone fa-rotate-vertical" aria-hidden="true"></i><label>Call Centers/SMS</label></a>
                </div>
           </div>
           <hr>


<div class="container caros">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 resizing" src="images/farmer/fp1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 resizing" src="images/farmer/fp2.jpg" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 resizing" src="images/farmer/fp3.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 resizing" src="images/farmer/fp4.jpg" alt="Second slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


           <br><br>
           <div class="features container">
                <h1 style="font-weight: bold;color:black; text-align:center">Standout Features</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                     <div class="card">
                        
                          <div class="card-body">
                               <h4 class="card-title font-weight-bold">Sms System </h4>
                               <br>
                               <h5 class="card-text">Upload and Edit Your Products via SMS </h5>
                          </div>
                     </div>
                     <div class="card">
                        
                          <div class="card-body">
                               <h4 class="card-title font-weight-bold">Buyer Connection</h4>
                               <br>
                               <h5 class="card-text">Get in direct touch with the buyer to satisfy its need </h5>
                          </div>
                     </div>
                     <div class="card">
                       
                          <div class="card-body">
                               <h4 class="card-title font-weight-bold">Farmer Group Formation</h4>
                               <br>
                               <h5 class="card-text">Get in touch with other farmers making your own community where you can ask for help</h5>
                          </div>
                     </div>
                </div>
           </div>
           </div>
           <br> <br>
           <?php
    include("footer.php");
    ?>
       
      </body>

 </html>