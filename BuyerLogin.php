<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="shortcut icon" href="./images/logo11.jpg" type="image/x-icon" sizes="160x100" >
    <link rel="apple-touch-icon" href="./images/logo11.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="css/login.css">

 
</head>

<body>
<nav>
        <a href="home.php" class="home">
            <i class="fas fa-home"></i>
        </a>
    </nav>
      <div class="wrapper">
        <div class="title-text">
            <div class="title login">
                Buyer Login
            </div>
            <div class="title signup">
                Farmer Login
            </div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login"checked >
                <input type="radio" name="slide" id="flogin">
                <label for="login" class="slide login">Buyer Login</label>
                <label for="flogin" class="slide flogin">Farmer Login</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form id="login-form" class="login" method="post">
                    <div class="field">
                        <input type="text" id="user_name" class="form-control border border-dark" name="username" placeholder="Username" required>
                    </div>
                    <div class="field">
                        <input id="p1" class="form-control border border-dark" type="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <button type="submit"  class="log" name="login" value="Login">Login</button>
                    </div>
                    <div class="signup-link">
                        <a id='link' href="BuyerRegistration.php" style="color:black">Create New Account</a>
                    </div>
                </form>
                <form class="loginf" id="signup-form"  method="post">
                    <div class="field">
                    <input type="text" id="user_name" class="form-control border border-dark" name="usernamef" placeholder="Username" required>
                    </div>
                    <div class="field">
                    <input id="p1" class="form-control border border-dark" type="password" name="passwordf" placeholder="Password" required>
                    </div>
                   
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <button type="submit"  class="log" name="loginf" value="Login">Login</button>
                    </div>
                    <div class="signup-link">
                        <a id='link' href="FarmerRegistration.php" style="color:black">Create New Account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.flogin");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
       
    </script>

</body>

</html>

<?php
include("Includes/db.php");
if (isset($_POST['login'])) {

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '2345678910111211';
    $encryption_key = "DE";

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );
    $query = "select * from buyerregistration where buyer_username = '$username' and buyer_password = '$encryption'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);
    if ($count_rows == 0) {
        echo "<script>alert('Please Enter Valid Details');</script>";
        echo "<script>window.open('BuyerLogin.php','_self')</script>";
    }
    while ($row = mysqli_fetch_array($run_query)) {
        $id = $row['buyer_id'];
    }

    $_SESSION['username'] = $username;
    echo "<script>window.open('bhome.php','_self')</script>";
}

 if (isset($_POST['loginf']))
  {

    $username = mysqli_real_escape_string($con, $_POST['usernamef']);
    $password = mysqli_real_escape_string($con, $_POST['passwordf']);

    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '2345678910111211';
    $encryption_key = "DE";

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );
    $query = "select * from farmerregistration where farmer_name = '$username' and farmer_password = '$encryption'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);
    if ($count_rows == 0) {
        echo "<script>alert('Please Enter Valid Details');</script>";
        echo "<script>window.open('BuyerLogin.php','_self')</script>";
    }
    while ($row = mysqli_fetch_array($run_query)) {
        $id = $row['farmer_id'];
    }

    $_SESSION['username'] = $username;
    echo "<script>window.open('farmerhomepage.php','_self')</script>";
}
?>