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
    <link rel="shortcut icon" href="./images/logo11.jpg" type="image/x-icon" sizes="160x100">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="js/state.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@latest/dist/html5shiv.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond@latest/dist/respond.min.js"></script>
    <style>
    #secr {
        color: black !important;
    }
    </style>
</head>

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

</head>

<body>
    <nav class="navbar navbar-expand-xl fixed-top navbar-default bootsnav" style="background-color: #292b2c; ">



        <a class="float-left" href="bhome.php">
            <img src="images\logo1.jpg" class="float-left mr-2 moblogo" alt="Logo"
                style="border-radius:50%; height:50px;">
        </a>
        <div class="attr-nav">
            <!-- Start Top Search -->
            <div class="top-searchh " style="margin-top: 15px;margin-bottom: 15px;">
                <div class="container">
                    <div class="input-group">
                        <form action="SearchResult.php" method="get" enctype="multipart/form-data">
                            <input type="text" class="form-control " id="inlineFormInputGroup" name="search"
                                placeholder="Search for fruits,vegetables or crops " style="width:500px;">
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->
        </div>

        <div class="collapse navbar-collapse">
            <div class=" flex-row right ">
                <ul class="nav navbar-nav ml-auto" id="nave" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item activee"><a class="nav-link" href="bhome.php">home</a></li>
                    <li class="nav-item"><a class="nav-link" href="orders.php">orders</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.php">contact us</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">about us</a></li>
                </ul>
                <div class="p-2 cart">
                    <div class="icon2">
                        <a href="cart.php"> <i class="fa" style=" color:white">&#61562;<span id="icon"
                                    style="color:white,font-size:15px; "> <?php echo totalItems(); ?> </span></i></a>
                    </div>
                </div>

            </div>
        </div>

        <?php getUsername();?>


    </nav>




    <div class="container" style=" padding: 5px; ">
        <div class="card-deck"
            style="width: 70rem; margin: 75px; margin-bottom: 5px;margin-top: 125px; margin-left: 5px">

            <div class="card ">
                <img class="card-img-top" src="images\categfruits.jpg" style="width: 155px;height:103px;"
                    alt="Image Not Available!!">
                <div class="card-body text-muted mx-auto">

                    <div class="dropdown">
                        <button class="btn btn-green mybtn dropdown-toggle" style="background:#ffffff" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Fruits
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php
                    getFruits();
                        ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card ">
                <img class="card-img-top" src="images\categveg.jpg" style="width: 155px;height:103px;"
                    alt="Image Not Available!!">
                <div class="card-body text-muted mx-auto">

                    <div class="dropdown">
                        <button class="btn btn-green mybtn dropdown-toggle" style="background:#ffffff" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Vegetables
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php
                    getVegetables();
                        ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card ">
                <img class="card-img-top" src="images\categseeds.jpg" style="width: 155px;height:103px;"
                    alt="Image Not Available!!">
                <div class="card-body text-muted mx-auto">

                    <div class="dropdown">
                        <button class="btn btn-green mybtn dropdown-toggle" style="background:#ffffff" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Seeds
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php
                    getSeeds();
                        ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card ">
                <img class="card-img-top" src="images\categtools.jpg" style="width: 155px;height:103px;"
                    alt="Image Not Available!!">
                <div class="card-body text-muted mx-auto">

                    <div class="dropdown">
                        <button class="btn btn-green mybtn dropdown-toggle" style="background:#ffffff" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Gardening Tools
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php
                    getGardeningtools();
                        ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card ">
                <img class="card-img-top" src="images\categcrops.jpg" style="width: 155px;height:103px;"
                    alt="Image Not Available!!">
                <div class="card-body text-muted mx-auto">

                    <div class="dropdown">
                        <button class="btn btn-green mybtn dropdown-toggle" style="background:#ffffff" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Crops & Pulses
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php
                        getCrops();
                        ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card ">
                <img class="card-img-top" src="images\categothers.jpg" style="width: 155px;height:103px;"
                    alt="Image Not Available!!">
                <div class="card-body text-muted mx-auto">

                    <div class="dropdown">
                        <button class="btn btn-green mybtn dropdown-toggle" style="background:#ffffff" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Others
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php
                           getOthers();
                        ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- End Main Top -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> AG-Zone</strong></h1>
                            <p class="m-b-40">A platform dedicated to Our Beloved Farmers <br> Here You will get all the
                                essential thing related to agriculture.</p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> AG-Zone</strong></h1>
                            <p class="m-b-40">A platform dedicated to Our Beloved Farmers <br> Here You will get all the
                                essential thing related to agriculture.</p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> AG-Zone</strong></h1>
                            <p class="m-b-40">A platform dedicated to Our Beloved Farmers <br> Here You will get all the
                                essential thing related to agriculture.</p>
                            <p><a class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->


    <div class="container">
        <div class="text-center">
            <!-- <h2 id="headings" class="destext">Fresh fruits</h2> -->
            <h1 id="headings" class="guard"><span><b>Fresh Fruits </b></span>
            </h1>
        </div>

        <hr>

        <div class="row BigBox">

            <?php
            getFruitsHomepage();
            ?>

            <hr>
        </div>
        <hr>
    </div>
    <br><br>


    <div class="container">
        <div class="text-center">
            <!-- <h2 id="headings" class="destext">Fresh fruits</h2> -->
            <h1 id="headings" class="guard"><span><b>Fresh Vegetables </b></span>
            </h1>
        </div>

        <hr>

        <div class="row BigBox">

            <?php
            getVegetablesHomepage();
            ?>

            <hr>
        </div>
        <hr>
    </div>
    <br><br>

    <div class="container">

        <div class="text-center">
            <h1 id="headings" class="longguard"><span><b>Best Selling Products All Over India </b></span>
            </h1>
        </div>
        <br>
        <div class="row">
            <?php
            
            cart();
            getProducts();
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