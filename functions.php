<?php

session_start();
include("Includes/db.php");

function getUsername()
{
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        global $con;

        $query = "select * from buyerregistration where buyer_username = '$username'";
        $run_query = mysqli_query($con, $query);
        if ($run_query) {
            while ($row_cat = mysqli_fetch_array($run_query)) {
                $buyer_name = $row_cat['buyer_name'];
               
            }
            echo @" <a href='#'><div class='text-success  logins mx-1 ml-3 ' >$buyer_name</div></a>";
            echo "<a href = 'logout.php'><div class='text-success logins '>Logout</div></a>";
        }
    } else {
        echo "<a href = 'BuyerLogin.php'><div class='text-success logins mx-1 ml-3'>Login</div></a>";
        // echo "<label><a href = '../auth/BuyerLogin.php' style = 'color:white' >Login/Sign up</a></label>";
    }
}


function getFarmerUsername()
{
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        global $con;

        $query = "select * from farmerregistration where farmer_name = '$username'";
        $run_query = mysqli_query($con, $query);
        if ($run_query) {
            while ($row_cat = mysqli_fetch_array($run_query)) {
                $farmer_name = $row_cat['farmer_name'];
               
            }
            echo @" <a href='myaccount.php'><div class='text-success  logins mx-1 ml-3 ' >$farmer_name</div></a>";
            echo "<a href = 'logout.php'><div class='text-success logins '>Logout</div></a>";
        }
    } else {
        echo "<a href = 'BuyerLogin.php'><div class='text-success logins mx-1 ml-3'>Login</div></a>";
        // echo "<label><a href = '../auth/BuyerLogin.php' style = 'color:white' >Login/Sign up</a></label>";
    }
}


function CheckoutIdentify()
{
    if (isset($_SESSION['username'])) {
        echo "<script>window.open('cart.php','_self')</script>";
    } else {
        echo "<script>window.open('BuyerLogin.php','_self')</script>";
    }
}


function getCrops()
{

    global $con;

    $query = "select * from products where product_cat = 1 AND product_status = 'APPROVED' order by RAND() ";

    $run_query = mysqli_query($con, $query);

    while ($row_cat = mysqli_fetch_array($run_query)) {
        $product_type = $row_cat['product_type'];
        echo "<a class='dropdown-item' href='Categories.php?type=$product_type'>$product_type</a>";
    }
}

function getVegetables()
{

    global $con;

    $query = "select * from products where product_cat = 2 AND product_status = 'APPROVED' order by RAND()";

    $run_query = mysqli_query($con, $query);

    while ($row_cat = mysqli_fetch_array($run_query)) {
        $product_type = $row_cat['product_type'];
        echo "<a class='dropdown-item' href='Categories.php?type=$product_type'>$product_type</a>";
    }
}
function getFruits()
{

    global $con;

    $query = "select * from products where product_cat = 3  AND product_status = 'APPROVED' order by RAND()";

    $run_query = mysqli_query($con, $query);

    while ($row_cat = mysqli_fetch_array($run_query)) {
        $product_type = $row_cat['product_type'];
        echo "<a class='dropdown-item' href='Categories.php?type=$product_type'>$product_type</a>";
    }
}


function getSeeds()
{

    global $con;

    $query = "select * from products where product_cat = 4 AND product_status = 'APPROVED' order by RAND() ";

    $run_query = mysqli_query($con, $query);

    while ($row_cat = mysqli_fetch_array($run_query)) {
        $product_type = $row_cat['product_type'];
         echo "<a class='dropdown-item' href='Categories.php?type=$product_type'>$product_type</a>";
    }
}


function getGardeningtools()
{

    global $con;

    $query = "select * from products where product_cat = 5 AND product_status = 'APPROVED' order by RAND() ";

    $run_query = mysqli_query($con, $query);

    while ($row_cat = mysqli_fetch_array($run_query)) {
        $product_type = $row_cat['product_type'];
        echo "<a class='dropdown-item' href='Categories.php?type=$product_type'>$product_type</a>";
    }
}


function getOthers()
{

    global $con;

    $query = "select * from products where product_cat = 6 AND product_status = 'APPROVED' order by RAND()";

    $run_query = mysqli_query($con, $query);

    while ($row_cat = mysqli_fetch_array($run_query)) {
        $product_type = $row_cat['product_type'];
        echo "<a class='dropdown-item' href='Categories.php?type=$product_type'>$product_type</a>";
    }
}



function getProducts()
{
    global $con;
    $query = "select * from products where product_status='APPROVED'  order by product_cat";
    $run_query = mysqli_query($con, $query);
    echo "<br>";
    while ($rows = mysqli_fetch_array($run_query)) {
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
            <div class='card pb-1 pl-1 pr-1 pt-0 shadow-lg' style='height:542px'>
                <br>
                <div class='mt-0'><b>
                        <h4><img src='images/iconsmall.png' style='width: 28px; margin-bottom:  10px;'>  
                    </b></h4>
                </div>
                <a href='ProductDetails.php?id=$product_id'>
    <img class='card-img-top' src='images/products/$product_image' alt='No Image Available!!' style='width: 300px; height: 300px;'>
</a>

                <div class='card-body pb-0'>
                    <div class='row'>
                        <div class='col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12'>
                            <div class='input-group mb'>
                                <div class='input-group-prepend'>
                                    <h5 class='card-title font-weight-bold '>$product_title</h5>
                                </div>

                            </div>
                        </div>
                      
                    </div>
                    <p class='card-text mb-2 font-weight-bold  text-center'>PRICE:- $product_price Rs/kg</p>
                    <div class='row'>
                        <div class='col-1 col-xl-3 col-lg-2 col-md-2 col-sm-2'></div>
                        <div class='col-12 col-xl-6 col-lg-6 col-md-6  col-sm-12'>
                            <a href='bhome.php?add_cart=$product_id' class='btn btn-warning border-secondary mr-1  ' style='color:black ;font-weight:bold;'>Add to cart&nbsp<img src='images/carticons.png' height='20px'></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       ";
    }
}



function getVegetablesHomepage()
{
    global $con;
    $query = "select * from products where product_cat = 2 and   product_status='APPROVED' and not  (product_image = '') order by RAND() LIMIT 0,4";
    $run_query = mysqli_query($con, $query);
    while ($rows = mysqli_fetch_array($run_query)) {
        $product_id = $rows['product_id'];
        $product_title = $rows['product_title'];
        $product_image = $rows['product_image'];
        $product_price = $rows['product_price'];
        $product_delivery = $rows['product_delivery'];
        $product_cat = $rows['product_cat'];
        $product_type = $rows['product_type'];

        // echo "  <div class='veg'>
        //             <a href='BuyerProductDetails.php?id=$product_id'><img src='../Admin/product_images/$product_image' height='250px' width='300px' ></a>
        //         </div>";

        echo "<div class='column kolum'>
            <div class='img-thumbnail ''>
                 <a href='Categories.php?type=$product_type'>
                    <img class='rounded mx-auto d-block images' src='images/products//$product_image' width='350px' height='200px' alt='image'>
                 </a>
            </div>
        </div>";
    }
}

function getFruitsHomepage()
{
    global $con;
    $query = "select * from products where product_cat = 3  and   product_status='APPROVED' and not (product_image = '') order by RAND() LIMIT 0,4";
    $run_query = mysqli_query($con, $query);
    while ($rows = mysqli_fetch_array($run_query)) {
        $product_id = $rows['product_id'];
        $product_title = $rows['product_title'];
        $product_image = $rows['product_image'];
        $product_price = $rows['product_price'];
        $product_delivery = $rows['product_delivery'];
        $product_cat = $rows['product_cat'];
        $product_type = $rows['product_type'];
        echo "<div class='column kolum'>
            <div class='img-thumbnail ''>
                 <a href='Categories.php?type=$product_type'>
                    <img class='rounded mx-auto d-block images' src='images/products//$product_image' width='350px' height='200px' alt='image'>
                 </a>
            </div>
        </div>";
    }
}

// Checkout System Functions
function cart()
{
    global $con;

    if (isset($_SESSION['username'])) {
        if (isset($_GET['add_cart'])) {
            if (isset($_POST['quantity'])) {
                $qty = $_POST['quantity'];
            } else {
                $qty = 1;
            }

            $sess_user_name = $_SESSION['username'];
            $product_id = $_GET['add_cart'];

            // Use a prepared statement to avoid SQL injection
            $check_pro = "SELECT * FROM cart WHERE username = ? AND product_id = ?";
            $stmt = mysqli_prepare($con, $check_pro);
            mysqli_stmt_bind_param($stmt, "ss", $sess_user_name, $product_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            // Check if a row with the given username and product_id already exists
            if (mysqli_num_rows($result) > 0) {
                echo "";
            } else {
                // Insert a new row if it doesn't exist
                $insert_pro = "INSERT INTO cart (product_id, username) VALUES (?, ?)";
                $stmt_insert = mysqli_prepare($con, $insert_pro);
                mysqli_stmt_bind_param($stmt_insert, "ss", $product_id, $sess_user_name);
                mysqli_stmt_execute($stmt_insert);
            }

            // Redirect to the desired page after performing the operation
            echo "<script>window.open('bhome.php','_self')</script>";
        }
    } else {
        echo "<script>alert('Please Login First!');</script>";
    }
}


//function which is link with FarmerHomePage
function getFarmerProducts()
{
    include("includes/db.php");
    global $con;
    $sess_user_name = $_SESSION['username'];
    $query = "select * from products where farmer_fk in (select farmer_id from farmerregistration where farmer_name='$sess_user_name') ";
    $run_query = mysqli_query($con, $query);
    $count = 0;
    if ($run_query) {
        echo "<div class='row'>";
        while ($row = mysqli_fetch_assoc($run_query)) {
            $count = $count + 1;
            $product_title = $row['product_title'];
            $image = $row['product_image'];
            $status = $row['product_status'];
            $price = $row['product_price'];
            $id = $row['product_id'];
            $path = "images/products/" . $image;
        
            // set the color based on the status
            if ($status == 'APPROVED') {
                $color = 'green';
            } else if ($status == 'PENDING') {
                $color = 'orange';
            } else {
                $color = 'red';
            }
        
            echo "
                <div class='col-12 col-sm-6 col-md-4 col-lg-3' >
                    <div class='card pb-1 pl-1 pr-1 pt-0 shadow' style='height:542px;border:1px solid black;'>
                        <br>
                        <a href='FarmerProductDetails.php?id=$id'>
                            <img class='card-img-top' src='images/products/$image' alt='No Image Available!!' style='width: 300px; height: 300px;'>
                        </a>
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
                                <div class='col-12'>
                                    <p class='card-text mb-2 font-weight-bold text-center' style='color: $color;'>STATUS:- $status</p>
                                </div>
                            </div>";
            
            // check if the status is REJECTED
            if ($status == 'REJECTED') {
                echo "
                            <div class='row'>
                                <div class='col-12'>
                                    <form method='post'>
                                        <input type='hidden' name='delete_product_id' value='$id'>
                                        <button type='submit' class='btn btn-danger btn-sm' style='width: 100%;'>Delete</button>
                                    </form>
                                </div>
                            </div>";
            }
            
            echo "
                        </div>
                    </div>
                </div>";
        }
        
        
        echo "</div>";
    } else {
        echo "<br><br><hr><h1 align=center>No Products !</h1><br><br><hr>";
    }    


// Code to handle delete product request
if (isset($_POST['delete_product_id'])) {
    $delete_product_id = $_POST['delete_product_id'];
    $query = "delete from products where product_id=$delete_product_id";
    $run_query = mysqli_query($con, $query);
    if ($run_query) {
        echo "<script>alert('Product deleted successfully!')</script>";
        echo "<script>window.open('MyProducts.php', '_self')</script>";
    } else {
        echo "<script>alert('Error')</script>";
    }

}
}

//function which is linked with BuyerProductDetails
function getBuyerProductDetails()
{
    include("Includes/db.php");
    global $con;
    $sess_user_name = $_SESSION['username'];
    if (isset($_GET['id'])) {
        $prod_id = $_GET['id'];
        $query = "select * from products where product_id=" . $prod_id;
        $run_query = mysqli_query($con, $query);
        $resultCheck = mysqli_num_rows($run_query);
        if ($resultCheck > 0) {
            while ($rows = mysqli_fetch_array($run_query)) {
                $product_title = $rows['product_title'];
                $product_image = $rows['product_image'];
                $product_type = $rows['product_type'];
                $product_stock = $rows['product_stock'];
                $product_description = $rows['product_desc'];
                $product_price = $rows['product_price'];
                $product_delivery = $rows['product_delivery'];
                $product_cat = $rows['product_cat'];
                echo "<div>
                    <img src='images/products/$product_image' height='250px' width='300px' ><br>"
                    . " product title  :  " . $product_title . "<br>"
                    . " product type  :  " . $product_type . "<br>"
                    . " product stock  :  " . $product_stock . "<br>"
                    . " product Description  :  " . $product_description . "<br>"
                    . " product price  :  " . $product_price . "<br>"
                    . " product Delivery  :  " . $product_delivery . "<br>"
                    . " product category  :  " . $product_cat . "<br>"
                    . "<button href=''>ADD TO CART</button>"
                    . "</div>";

                if (isset($_SESSION['username'])) {
                    $query = "select * from products where product_id=" . $prod_id;
                    $run = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_array($run)) {
                        $farmerid = $row['farmer_fk'];
                    }

                    $query = "select * from farmerregistration where farmer_id = $farmerid";
                    $run = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_array($run)) {
                        $farmer_name = $row['farmer_name'];
                        $farmer_phone = $row['farmer_phone'];
                        $farmer_address = $row['farmer_address'];
                    }
                    echo "farmer Name : " . $farmer_name . "<br>farmer Phone Number : " . $farmer_phone . "<br> Farmer Address" . $farmer_address;
                }
            }
        }
    }
}


function totalItems()
{
    global $con;
    if (isset($_SESSION['username'])) {
        $sess_user_name = $_SESSION['username'];

        $get_items = "select * from cart where username = '$sess_user_name'";
        $run_items =  mysqli_query($con, $get_items);
        $count_items =  mysqli_num_rows($run_items);
        return $count_items;
    } else {
        echo 0;
    }
}


function emptyCart()
{
    global $con;
    $sess_user_name = $_SESSION['username'];

    $get_items = "Delete from cart where username = '$sess_user_name'";
    $run_items =  mysqli_query($con, $get_items);
    $count_items =  mysqli_num_rows($run_items);
}


function bestSeller()
{
    global $con;
}
?>