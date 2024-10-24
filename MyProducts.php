 <?php
     include("functions.php");
     ?> 

<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Farmer - Products</title>
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
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 20px;
    }
 
</style>
</head>

      <body>
      <nav class="navbar navbar-expand-xl fixed-top navbar-default bootsnav" style="background-color: #292b2c;">
  <a class="float-left" href="farmerhomepage.php">
    <img src="images\logo1.jpg" class="float-left mr-2 moblogo" alt="Logo" style="border-radius:50%; height:50px;">
  </a>
  <div class="navbar-text mx-auto">
    <h1 class="text-white" style="font-size: 40px;">Products</h1>
  </div>
  <div class="flex-row right">
    <?php getFarmerUsername();?>
  </div>
</nav>



    

<br>
          
           <div class="row" style="margin-top: 95px;text-align:center; ">
                <div class="col-md-3 col-sm-12">
                     <a href="farmerHomepage.php" style="font-size: 20px;" id="navbar"><i class="fa fa-home" aria-hidden="true"></i><label>Home</label></a>
                </div>
                <div class="col-md-3 col-sm-12">
                     <a href="MyProducts.php" style="font-size: 20px;"id="navbar"><i class="fa fa-leaf" aria-hidden="true"></i><label>My Products</label></a>
                </div>
                <div class="col-md-3 col-sm-12">
                     <a href="Transactions.php" style="font-size: 20px;"id="navbar"><i class="fa fa-exchange" aria-hidden="true"></i><label>My Transactions</label></a>
                </div>
                <div class="col-md-3 col-sm-12">
                     <a href="CallCenter.php"style="font-size: 20px;" id="navbar"><i class="fa fa-phone fa-rotate-vertical" aria-hidden="true"></i><label>Call Centers/SMS</label></a>
                </div>
           </div>
           <hr>

       
          <hr>


          <br>


          <div class=content_item>
               <label style="font-size :30px; text-shadow: 1px 1px 1px gray;"><b>All Products</b></label>
               <?php
               include("includes/db.php");
               if (isset($_SESSION['username'])) {

                    echo "<a href='InsertProduct.php'>
                    <button class='btn btn-warning btn-lg p-3 m-3 font-weight-bold' style='color:black; '>Add New Product <i class='fas fa-plus-square p-2 fa-1x'></i>
                    </button>
                    </a>";
               } else {
                    echo "<a href='BuyerLogin.php'>
                    <button class='btn btn-warning btn-lg p-3 m-3 font-weight-bold'>Add New Product <i class='fas fa-plus-square p-2 fa-1x'></i>
                    </button>
                    </a>";
               }
               ?>

          </div>
<style>
     .content_item {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
     </style>
          <br>
          <main style='margin-right:25px;margin-left:20px;'>
               <div class="products">

                    <?php
                    include("includes/db.php");
                    if (isset($_SESSION['username'])) {
                         $sess_user_name = $_SESSION['username'];
                         getFarmerProducts();
                    } else {
                         echo "<br><br><h1 align = center>Please Login!</h1><br><br><hr>";
                    }
                    ?>
               </div>
               <br> <br>
               <hr>
          </main>

          
         

     </body>
     <?php
    include("footer.php");
    ?>
</html>