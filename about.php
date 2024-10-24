<?php
include("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>AG-Zone - Ecommerce platform for Farmers</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="./images/logo11.jpg" type="image/x-icon" sizes="160x100" >
    <link rel="apple-touch-icon" href="./images/logo11.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <style>
        
    .text-success {
    color: black!important;
    font-weight: bold;
    text-transform: uppercase;
    display: inline-block;
    padding-left:25px;

}

        nav.navbar.bootsnav ul.nav > li > a {
    position: relative;
    font-weight: 700;
    font-size: 16px;
    color: black!important;
    text-transform: uppercase;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 30px;
}
</style>
 </head>
    <body>
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="right-phone-box">
                        <p>Call US :- <a href="tel:+91 7631538764"> 7631538764</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#"><i class="fa fa-user s_color"></i> My Account</a></li>
                            <li><a href="contact-us.php"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="our-link">
                       <ul id="basic">
                            <li><a href="./BuyerRegistration.php"><i class="fa fa-user s_color"></i> Register Here !!</a></li>
                            <li><a href="contact-us.php"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul> 
                    </div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 5% - 10% off on fruits
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Organic Fertilizers
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 15%! For Orders Above 2000
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Agri Equipment
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="home.php"><img src="images/logo11.jpg" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" id="nave"data-in="fadeInDown" data-out="fadeOutUp">
              <li class="nav-item activee"><a class="nav-link" href="bhome.php">home</a></li>
              <li class="nav-item"><a class="nav-link" href="contact-us.php">contact us</a></li>
            </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="at2>
                    <ul>
                        <li class="nav-item" >
                      <?php getUsername();?></li>

                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
    
        </nav>
        <!-- End Navigation -->
     

    </header>
        <!-- End Main Top -->
    

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ABOUT US</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item active">ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="images/about-img.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">We are <span>AG-Zone</span></h2>
                    <p>"We are focusing to provide farmers and consumers a dedicated online platform to buy and sell
                        genuine and original products. This will protect the peoples from buying the Inorganic
                        goods.There will be a separate section in the website that will provide the important
                        information to the farmers regarding the different crops.
                        We all know that the Indian market is flooded with a lot of inorganic
                        food products and many other agriculture-related things.

                    </p>
                
                    <a class="btn hvr-hover" href="#">Read More</a>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>AG-Zone is the e=commerce platform focusing to provide farmers and consumers to buy
                            and sell organic and natural goods. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Professional</h3>
                        <p>AG-Zone is a website dedicated to all our beloved farmers and consumers. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We will Provide</h3>
                        <p>On this website you can buy and sell of the product related to Agriculture
                            (Fertilizers,Seeds,Pestisides etc) and We are very thankful to all of them for the support.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->
    <?php
    include("footer.php");
    ?>

</body>

</html>