  <?php
     include("functions.php");
     ?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Success Product Added</title>
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
     .text-sueccess {
    color: #28a745!important;
    font-weight: bold;
    text-transform: uppercase;
}
</style>
</head>

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


       <br>
       <div class="card" style="margin-top:115px">
            <h4 class="card-header text-sueccess text-center font-weight-bold">Success</h4>
            <div class="card-body">
                 <h1 class="card-title text-sueccess text-center font-weight-bold">Your Order Has Been successfully Placed !!</h1>
                 <h2 class="card-text text-center">Thankyou For Shopping With Us.</h2>
                 <br>
                 <div class="form-actions text-center">
                      <a href="bhome.php" class="btn btn-success btn-lg ">Go To Home</a>
                 </div>
            </div>
       </div>

       <br><br><br>






       <br>
       <br>
       <?php
    include("footer.php");
    ?>
  </body>

  </html>