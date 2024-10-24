
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="./images/logo11.jpg" type="image/x-icon" sizes="160x100" >
    <link rel="apple-touch-icon" href="./images/logo11.jpg">
	<title>Farmer Registration</title>
	<link rel="stylesheet" type="text/css" href="css/BuyReg.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/state.js"></script>
	<script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>

<body>
<nav>
      <a href="home.php" class="home">
          <i class="fas fa-home"></i>
      </a>
    </nav>
		<main class="my-form">
		<div class="cotainer" style=" padding: 30px;
    border-radius: 5px;
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);">
		<div class="col d-flex justify-content-center">
			<div class="row d-justify-content-center">
				<div class="col-md-8">
					<div class="card" style="width:40rem; border: 1px solid black; ">
					
					<div class="card-header" style="background: #fff;"><h4 class="hed" style="font-style:bold;color:#b0b435;">Signup</h4></div>

						<div class="card-body">
							<form name="my-form" method="post">
								<div class="form-group row">
									<label for="full_name" class="col-md-4 col-form-label text-md-left"><i class="fas fa-user mr-2"></i><b>Full Name</b></label>
									<div class="col-md-7">
										<input type="text" id="full_name" class="form-control border border-dark" name="name" placeholder="Enter Your Name" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="phone_number" class="col-md-4 col-form-label text-md-left "><i class="fas fa-phone-alt mr-2"></i><b>Phone Number</b></label>
									<div class="col-md-7">
										<input type="text" id="phone_number" class="form-control w-100 border border-dark" style="width:100% ! important;" name="phonenumber" placeholder="Phone Number" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="present_address" class="col-md-4 col-form-label text-md-left"><i class="fas fa-home mr-2"></i><b>Present Address</b></label>
									<div class="col-md-7">
										<textarea type="text" id="present_address" class="form-control border border-dark" rows="4" name="address" placeholder="Address" required></textarea>
									</div>
								</div>

								<div class="form-group row">
                                <label for="states" class="col-md-4 col-form-label text-md-left"><b><i class="fas fa-globe-americas mr-2"></i>State</b></label>
									<div class="col-md-7">
                                    <select name="statevalue" id="states" onchange="state()" class="form-control border border-dark">
                                            <option value="0">--Select State--</option>
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
								</div>

								
								

                                <div class="form-group row">
                                    <label for="states" class="col-md-4 col-form-label text-md-left"><b><i class="fas fa-globe-americas mr-2"></i>District</b></label>
                                    <div class="col-md-7">
                                        <select name="district" id="district" class="form-control border border-dark">
                                            <option>Select District</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
									<label for="account2" class="col-md-4 col-form-label text-md-left"><i class="fas fa-pencil-alt mr-2"></i><b>Pin Code</b></label>
									<div class="col-md-7">
										<input type="text" id="account2" class="form-control border border-dark" name="pin" placeholder="Pin number" required>
									</div>
								</div>
								<div class="form-group row">
									<label for="p1" class="col-md-4 col-form-label text-md-left "><i class="fas fa-lock mr-2"></i><b>Password</b></label>
									<div class="col-md-7">
										<input id="p1" class="form-control border border-dark" type="password" name="password" placeholder="Password" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="p2" class="col-md-4 col-form-label text-md-left"><i class="fas fa-lock mr-2"></i><b>Confirm Password</b></label>
									<div class="col-md-7">
										<input id="p2" class="form-control border border-dark" type="password" name="confirmpassword" placeholder="Confirm Password" required>
									</div>
								</div>
								<div class="col-md-6 offset-md-4">
									<button type="submit" class="btn "  name="register" value="Register">
										Register
									</button>
								</div>
								<div class="signin-link">
                    				    Already a member? <a href="BuyerLogin.php">Signin</a>
                 				   </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

</body>

</html>


<?php

include("Includes/db.php");

if (isset($_POST['register'])) {

	$name = mysqli_real_escape_string($con, $_POST['name']);
	$phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
    $pin = mysqli_real_escape_string($con, $_POST['pin']);
    $district = mysqli_real_escape_string($con, $_POST['district']);
    $state = mysqli_real_escape_string($con, $_POST['statevalue']);

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

	if (strcmp($password, $confirmpassword) == 0) {

		$query = "insert into farmerregistration (farmer_name,farmer_phone,farmer_address, farmer_state, farmer_district,farmer_pin,farmer_password) 
                values ('$name','$phonenumber','$address','$state','$district','$pin','$encryption')";

		$run_register_query = mysqli_query($con, $query);
		echo "<script>alert('SucessFully Inserted');</script>";
        echo "<script>window.open('BuyerLogin.php','_self')</script>";

  
	
	} else if (strcmp($password, $confirmpassword) != 0) {
		echo "<script>
			alert('Password and Confirm Password Should be same');
		</script>";
	}
}


?>